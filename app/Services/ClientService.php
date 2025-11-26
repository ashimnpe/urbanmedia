<?php

namespace App\Services;

use App\Contracts\ClientInterface;
use App\Models\Client;
use Exception;
use Illuminate\Support\Facades\DB;
use Spatie\Image\Enums\Fit;

class ClientService implements ClientInterface
{
    public function getAll()
    {
        $clients = Client::orderBy('id', 'desc')->with('media')->get();
        return $clients;
    }

    public function getClientById($id)
    {
        try {
            $client = Client::with('media')->find($id);
            return $client;
        } catch (Exception $e) {
            throw new Exception('Client not found', 404);
        }
    }

    public function createClient($request)
    {
        $dataValidate = $request->validated();
        $existingClient = Client::where('name', $dataValidate['name'])->first();
        if ($existingClient) {
            throw new Exception("Client already exists", 409);
        }

        DB::beginTransaction();
        try {
            $client = Client::create($dataValidate);
            if ($request->hasFile('photo')) {
                $client->addMedia(file: $request->file('photo'))
                ->toMediaCollection(collectionName: 'clients');
                
                $client->addMediaConversion('thumb')
                ->fit(Fit::Contain, 320, 180)
                ->nonQueued();

            }
            DB::commit();
            return $client;
        } catch (Exception $ex) {
            DB::rollBack();
            throw new Exception("Error creating Team", 500);
        }
    }

    public function updateClient($request, $id)
    {
        $existingClient = $this->getClientById($id);
        $dataValidate = $request->validated();
        try {
            $existingClient->update($dataValidate);
            if ($request->hasFile('photo')) {
                $existingClient->clearMediaCollection('clients');
                $existingClient->addMedia(file: $request->file('photo'))->toMediaCollection(collectionName: 'clients');
            }
            return $existingClient;
        } catch (Exception $ex) {
            throw new Exception("Error Updating Client, $ex", 500);
        }
    }

    public function deleteClient($id)
    {
        $client = $this->getClientById($id);
        try {
            $client->delete();
        } catch (Exception $e) {
            throw new Exception("Error deleting Client", 500);
        }
    }
}

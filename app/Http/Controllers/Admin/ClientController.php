<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\ClientInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ClientRequest;
use Inertia\Inertia;

class ClientController extends Controller
{
    protected ClientInterface $clientService;

    public function __construct(ClientInterface $clientService)
    {
        $this->clientService = $clientService;
    }

    public function index()
    {
        $client = $this->clientService->getAll();
        return Inertia::render('clients', ['clients' => $client]);
    }

    public function store(ClientRequest $request)
    {
        $client = $this->clientService->createClient($request);
        return Inertia::render('clients', ['client' => $client]);
    }

    public function update(ClientRequest $request, $id)
    {
        $client = $this->clientService->updateClient($request, $id);
        return Inertia::render('clients', ['client' => $client]);
    }

    public function destroy($id)
    {
        $client = $this->clientService->deleteClient($id);
        if ($client) {
            return Inertia::render('clients', ['clients' => $client]);
        } else {
            return "Client Not Found";
        }
    }
}

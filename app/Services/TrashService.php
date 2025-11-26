<?php

namespace App\Services;

use App\Contracts\TrashInterface;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\User;
use Exception;

class TrashService implements TrashInterface
{
    public function getAll()
    {
        $client = Client::with('media')->onlyTrashed()->get();
        $contact = Contact::onlyTrashed()->get();
        $testimonial = Testimonial::onlyTrashed()->get();
        return [
            'client' => $client,
            'contact' => $contact,
            'testimonial' => $testimonial,
        ];
    }

    public function restore($type, $id)
    {
        switch ($type) {
            case 'client':
                $item = Client::onlyTrashed()->findOrFail($id);
                break;
            case 'contact':
                $item = Contact::onlyTrashed()->findOrFail($id);
                break;
            case 'testimonial':
                $item = Testimonial::onlyTrashed()->findOrFail($id);
                break;
            default:
                return false;
        }
        $item->restore();
        return true;
    }

    public function delete($type, $id)
    {
        switch ($type) {
            case 'client':
                $item = Client::onlyTrashed()->findOrFail($id);
                break;
            case 'contact':
                $item = Contact::onlyTrashed()->findOrFail($id);
                break;
            case 'testimonial':
                $item = Testimonial::onlyTrashed()->findOrFail($id);
                break;
            default:
                return false;
        }
        $item->forceDelete();
        return true;
    }
}

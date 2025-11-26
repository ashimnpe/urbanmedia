<?php

namespace App\Services;

use App\Contracts\ContactInterface;
use App\Models\Contact;
use Exception;

class ContactService implements ContactInterface
{
    public function getAll()
    {
        $contact = Contact::orderBy('id', 'desc')->get();
        return $contact;
    }

    public function getContactById($id)
    {
        try {
            $contact = Contact::find($id);
            return $contact;
        } catch (Exception $e) {
            throw new Exception('Contact not found', 404);
        }
    }

    public function deleteContact($id)
    {
        $contact = $this->getContactById($id);
        try {
            $contact->delete();
        } catch (Exception $e) {
            throw new Exception("Error deleting contact", 500);
        }
    }
}

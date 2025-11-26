<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\ContactInterface;
use App\Http\Controllers\Controller;
use Inertia\Inertia;

class ContactController extends Controller
{
    protected ContactInterface $contactService;

    public function __construct(ContactInterface $contactService)
    {
        $this->contactService = $contactService;
    }

    public function index()
    {
        $contacts = $this->contactService->getAll();
        return Inertia::render('contact',['contacts' => $contacts]);
    }

    public function destroy($id)
    {
        $contact = $this->contactService->deleteContact($id);
        return Inertia::render('contact',['contact' => $contact]);
    }
}

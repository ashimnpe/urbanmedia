<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\ContactRequest;
use App\Mail\ContactReceived;
use App\Models\Client;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function aboutUs()
    {
        return view('pages.about');
    }

    public function getService()
    {
        return view('pages.service');
    }

    public function getProject()
    {
        return view('pages.project');
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function getClient()
    {
        $clients = Client::with('media')->get();
        return view('pages.client', [
            'clients' => $clients,
        ]);
    }

    public function storeContact(ContactRequest $request)
    {
        $validateData = $request->validated();
        try {
            $contact = Contact::create($validateData);
            Mail::to($contact->email)->send(new ContactReceived($contact));
            Alert::toast('Your message has been sent successfully!', 'success')->position('top-end');
        } catch (\Exception $e) {
            Alert::toast('Failed to send your message. Please try again later.', 'error')->position('top-end');
        }
        return redirect()->back();
    }
}

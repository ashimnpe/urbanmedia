<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
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
        return view('pages.client');
    }

    public function storeContact(ContactRequest $request)
    {
        $validateData = $request->validated();
        try {
            Contact::create($validateData);
            Alert::toast('Your message has been sent successfully!', 'success')->position('top-end');
        } catch (\Exception $e) {
            Alert::toast('Failed to send your message. Please try again later.', 'error')->position('top-end');
        }

        return redirect()->back();
    }
}

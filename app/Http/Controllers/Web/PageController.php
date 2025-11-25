<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}

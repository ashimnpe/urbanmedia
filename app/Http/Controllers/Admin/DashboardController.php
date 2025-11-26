<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
     public function index(){
        $user = auth()->user();
        $isSuperAdmin = $user->hasRole('superadmin');


        $users = $isSuperAdmin ? User::count() : User::whereDoesntHave('roles', function ($query) {
            $query->where('name', 'superadmin');
        })->count();

        $contacts = Contact::count();
        $testimonials = Testimonial::count();
        $clients = Client::count();

        return Inertia::render('dashboard', [
            'userCount' => $users,
            'testimonialCount' => $testimonials,
            'contactCount' => $contacts,
            'clientCount' => $clients,
        ]);
    }
}

<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Web\PageController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

// Route::get('/', function () {
//     return Inertia::render('welcome', [
//         'canRegister' => Features::enabled(Features::registration()),
//     ]);
// })->name('home');


Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about');
Route::get('/our-services', [PageController::class, 'getService'])->name('services');
Route::get('/our-projects', [PageController::class, 'getProject'])->name('projects');
Route::get('/contact-us', [PageController::class, 'getContact'])->name('contact');
Route::get('/our-clients', [PageController::class, 'getClient'])->name('clients');

Route::post('/store-contact', [PageController::class, 'storeContact'])->name('store.contact');


Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/admin.php';

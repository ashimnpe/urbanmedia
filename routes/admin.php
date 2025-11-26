<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TrashController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['auth', 'verified'])->group(function () {

    Route::prefix('admin')->group(function () {

        // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Clients
        Route::get('/clients', [ClientController::class, 'index'])->name('client.index');
        Route::post('/clients/store', [ClientController::class, 'store'])->name('clients.store');
        Route::post('/clients/update/{id}', [ClientController::class, 'update'])->name('clients.update');
        Route::delete('/clients/delete/{id}', [ClientController::class, 'destroy'])->name('clients.delete');

        // Testimonials
        Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonial.index');
        Route::post('/testimonials/store', [TestimonialController::class, 'store'])->name('testimonials.store');
        Route::post('/testimonials/update/{id}', [TestimonialController::class, 'update'])->name('testimonials.update');
        Route::delete('/testimonials/delete/{id}', [TestimonialController::class, 'destroy'])->name('testimonials.delete');

        // // User
        Route::get('/users', [UserController::class, 'index'])->name('user.index');
        Route::post('/users/store', [UserController::class, 'store'])->name('user.store');
        Route::post('/users/update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');

        // Contact
        Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
        Route::delete('/contacts/delete/{id}', [ContactController::class, 'destroy'])->name('contact.delete');

        // // Trash
        Route::get('/trash', [TrashController::class, 'index'])->name('trash.index');
        Route::post('/trash/restore/{type}/{id}', [TrashController::class, 'restore'])->name('trash.restore');
        Route::post('/trash/delete/{type}/{id}', [TrashController::class, 'delete'])->name('trash.delete');
    });
});

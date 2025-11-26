<?php

namespace App\Providers;

use App\Contracts\ClientInterface;
use App\Contracts\ContactInterface;
use App\Contracts\UserInterface;
use App\Services\ClientService;
use App\Services\ContactService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ClientInterface::class, ClientService::class);
        $this->app->bind(ContactInterface::class, ContactService::class);
        $this->app->bind(UserInterface::class, UserService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

<?php

namespace App\Providers;

use App\Contracts\ClientInterface;
use App\Contracts\ContactInterface;
use App\Services\ClientService;
use App\Services\ContactService;
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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

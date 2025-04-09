<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider; // <-- THIS ONE

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        parent::boot(); // ensure parent boot is called if needed
    }
}

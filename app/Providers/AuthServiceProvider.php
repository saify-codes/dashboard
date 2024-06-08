<?php

namespace App\Providers;

use Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $role = Auth::user()?->role;

        Gate::define('admin', fn() => $role === 'ADMIN');
        Gate::define('merchant', fn() => $role === 'MERCHANT');
        Gate::define('user', fn() => $role === 'USER');
    }
}
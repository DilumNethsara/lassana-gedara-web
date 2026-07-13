<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\RolePolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

     protected $policies = [
        User::class => RolePolicy::class,
    ];

    
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('coordinatorAccess', [RolePolicy::class, 'coordinatorAccess']);
        Gate::define('adminAccess', [RolePolicy::class, 'adminAccess']);
    }
}

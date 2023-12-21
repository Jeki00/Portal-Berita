<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Define gates
        Gate::define('admin', function (User $user) {
            return $user->id_role === 1;
        });
        Gate::define('bendahara', function (User $user) {
            return $user->id_role === 2;
        });
        Gate::define('user', function (User $user) {
            return $user->id_role === 3;
        });
    }
}

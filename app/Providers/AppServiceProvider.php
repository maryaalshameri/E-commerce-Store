<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
          

Gate::define('access-admin-panel', function ($user) {
    if ($user->is_admin) {
        return true;
    } else {
        \Log::warning("Unauthorized access attempt by user_id: {$user->id}");
        abort(403); 
        // return false;

    }
});
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Product;
use App\Policies\ProductPolicy;
class AuthServiceProvider extends ServiceProvider
{


     /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
         Product::class => ProductPolicy::class,
        // \App\Models\Product::class => \App\Policies\ProductPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
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
        Gate::define('access-admin-panel', function ($user) {
            if ($user->is_admin) {
                return true;
            } else {
                \Log::warning("Unauthorized access attempt by user_id: {$user->id}");
                // abort(403); 
                return false;

            }
        });
    }
}

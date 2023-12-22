<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
            Gate::define('purchase-product', function (User $user){
                return !$user->is_admin; // allows users to purchase products if they are not an admin user
            });
            Gate::define('edit-product', function (User $user){
                return $user->is_admin; // Only admin users can edit a product
            });
    
    }
}
<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-anggota', function($user){
            return $user->roles == "Administrator";
           });
        Gate::define('manage-user', function($user){
            return $user->roles == "Administrator";
           });

        Gate::define('manage-buku', function($user){
            return $user->roles == "Administrator";
           });

        Gate::define('manage-peminjaman', function($user){
            return $user->roles == "Administrator";
           });
        Gate::define('manage-pengembalian', function($user){
            return $user->roles == "Administrator";
           });
        Gate::define('manage-laporan', function($user){
            return $user->roles == "Administrator";
           });

        Gate::define('user-display', function($user){
            return $user->roles == "User";
           });
    }
}
<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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

        Gate::define('logged-in',function($user){
            return $user;
        });

        Gate::define('is-admin',function($user){
            return $user->hasRole('Admin');
            
        });

        Gate::define('is-observateur',function($user){
            return $user->hasRole('Observateur');
            
        });

        Gate::define('is-dupw',function($user){
            return $user->hasRole('Dupw');
            
        });
        Gate::define('is-Admin-Dupw',function($user){
            return $user->(hasRole('Dupw') && hasRole('Dupw') );
            
        });


          }
}

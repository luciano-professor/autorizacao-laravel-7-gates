<?php

namespace App\Providers;

use Facade\FlareClient\Report;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Access\Response;

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

        //Gate para usuario do tipo administrador
        Gate::define('administrador', function($user){
            return $user->type == 'administrador';
        });

        //Gate para o usuario do tipo normal
        // Gate::define('normal', function($user){
        //     return $user->type == 'normal';
        // });

        Gate::define('normal', function($user){
            return $user->type == 'normal'
                    ? Response::allow()
                    : Response::deny('Ação só permitida pra usuários do tipo normal');
        });

    }
}

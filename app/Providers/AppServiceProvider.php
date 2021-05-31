<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Blade::if('correspondant', function(){
            return auth::user()->profil === 'Correspondant';
        });

        Blade::if('demandeur', function(){
            return auth::user()->profil === 'Demandeur';
        });

        Blade::if('verificateur', function(){
            return auth()->user()->profil === 'Verificateur';
        });

        Blade::if('coordonnateur', function(){
            return auth()->user()->profil === 'Coordonnateur';
        });

        Blade::if('administrateur', function(){
            return auth()->user()->profil === 'Administrateur';
        });
    }
}

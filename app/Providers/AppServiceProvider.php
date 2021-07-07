<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;


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
        Blade::if('enregistre', function () {
            return auth()->user()->profil === "Enregistre";
        });

        Blade::if('administrateur', function () {
            return auth()->user()->profil === "Administrateur";
        });
        Blade::if('verificateur', function () {
            return auth()->user()->profil === "Verificateur";
        });
        Blade::if('coordonateur', function () {
            return auth()->user()->profil === "Coordonateur";
        });
        Blade::if('ampliateur', function () {
            return auth()->user()->profil === "Ampliateur";
        }); 
    }
}

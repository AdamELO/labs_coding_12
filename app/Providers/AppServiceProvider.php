<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\ServiceProvider;

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
        Blade::if('Webmaster',function () {
            return auth()->user() && Auth::user()->role_id == 2;
        });
        Blade::if('Admin',function () {
            return auth()->user() && Auth::user()->role_id == 1;
        });
        Blade::if('Adminmaster',function () {
            return auth()->user() && (Auth::user()->role_id == 2 || Auth::user()->role_id == 1);
        });
    }
}

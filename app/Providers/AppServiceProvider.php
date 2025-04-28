<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

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
        View::share('setting',Setting::firstOrCreate());

        //
//        $route = Route::getCurrentRoute()->uri(); // Get the current route URI
//
//        if (Str::endsWith($route, '/')) {
//            return 0;
//        } else {
//            return 1;
//        }
    }
}

<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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
        //Paginator::useBootstrap(); // For Bootstrap 5
        //Paginator::defaultView('custom-paginate');
        // Paginator::useBootstrapFive();
        // Paginator::useBootstrapFour();
    }
}

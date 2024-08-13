<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use App\View\Composers\CommonViewComposer;
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
        view()->composer('*', CommonViewComposer::class);
    }
}

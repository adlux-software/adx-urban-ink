<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
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
        $categories = (new Category())
            ->where('is_active', 1) // update to status later
            ->get();

        $products = Product::with('media')->get();

        view()->share('categories', $categories);
        view()->share('products', $products);
    }
}

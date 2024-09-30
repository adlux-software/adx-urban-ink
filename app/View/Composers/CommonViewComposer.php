<?php

namespace App\View\Composers;


use App\Models\Category;
use App\Models\instagram;
use App\Models\Product;
use Illuminate\View\View;

class CommonViewComposer
{

    public function __construct()
    {
    }

    public function compose(View $view)
    {

        $categories = (new Category())
            ->where('is_active', 1) // update to status later
            ->get();

        $products = Product::with('media')->get();
        $instagram = instagram::with('media')->get();


        $view->with([
            'categories' => $categories,
            'products' => $products,
            'instagram' => $instagram,
        ]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    //show
    public function show($slug)
    {
        $product = (new Product())
            ->where('slug', $slug)
            ->with('variants', 'media')
            ->first();

        return view('products.show', [
            'product' => $product
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {

        return view('products.index');
    }

    public function homeIndex()
    {
        $products = Product::with('media')->get();

        return view('home', compact('products'));
    }

    //show
    public function show($slug)
    {
        $product = (new Product())
            ->where('slug', $slug)
            ->with('variants', 'media')
            ->first();

        return view('products.show', [
            'product' => $product,
        ]);
    }
}

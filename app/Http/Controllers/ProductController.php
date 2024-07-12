<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = (new Product())
            ->where('status', 1)
            ->with('variants', 'media')
            ->get();

        $totalProducts = $products->count();

        return view('products', [
            'products' => $products,
            'totalProducts' => $totalProducts
        ]);

    }
    //show
    public function show($slug)
    {
        $product = (new Product())
            ->where('slug', $slug)
            ->with('variants', 'media')
            ->first();

        return view('product-detail', [
            'product' => $product
        ]);
    }
}

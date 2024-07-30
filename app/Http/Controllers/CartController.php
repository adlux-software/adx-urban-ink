<?php

namespace App\Http\Controllers;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        //get the cart items and variants
        $cart = Cart::with('variants' ,'products')->get();
        return view('cart.index', compact('cart'));
    }

}

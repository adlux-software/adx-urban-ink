<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    // Fetch all wishlist items for the logged-in user
    public function index()
    {
        $wishlists = Wishlist::with('product')->where('user_id', Auth::id())->get();
        return view('components.wishlist', compact('wishlists'));
    }

    // Remove a single item from the wishlist
    public function removeItem($id)
    {
        $wishlist = Wishlist::findOrFail($id);
        if ($wishlist->user_id == Auth::id()) {
            $wishlist->delete();
            return response()->json(['message' => 'Item removed from wishlist.']);
        }
        return response()->json(['error' => 'Unauthorized action.'], 403);
    }

    // Add a single wishlist item to the cart
    public function addToCart($id)
    {
        $wishlist = Wishlist::findOrFail($id);

        if ($wishlist->user_id == Auth::id()) {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $wishlist->product_id,
                'quantity' => 1, // Default quantity
            ]);

            $wishlist->delete(); // Remove from wishlist after adding to cart
            return response()->json(['message' => 'Item added to cart.']);
        }
        return response()->json(['error' => 'Unauthorized action.'], 403);
    }

    // Add all wishlist items to the cart
    public function addAllToCart()
    {
        $wishlists = Wishlist::where('user_id', Auth::id())->get();

        foreach ($wishlists as $wishlist) {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $wishlist->product_id,
                'quantity' => 1, // Default quantity
            ]);
            $wishlist->delete();
        }

        return response()->json(['message' => 'All items added to cart.']);
    }
}

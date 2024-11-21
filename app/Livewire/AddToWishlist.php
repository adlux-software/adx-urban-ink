<?php

namespace App\Livewire;

use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddToWishlist extends Component
{
    public $product;  // Product passed from Blade
    public $isInWishlist = false;  // Public property

    public function mount($product)
    {
        $this->product = $product;

        // Initialize if the product is in the wishlist
        $this->isInWishlist = Wishlist::where('user_id', Auth::id())
            ->where('product_id', $this->product->id)
            ->exists();
    }

    public function toggleWishlist()
    {
        if (Auth::check()) {
            if ($this->isInWishlist) {
                Wishlist::where('user_id', Auth::id())
                    ->where('product_id', $this->product->id)
                    ->delete();
                $this->isInWishlist = false;
                session()->flash('message', 'Removed from wishlist.');
            } else {
                Wishlist::create([
                    'user_id' => Auth::id(),
                    'product_id' => $this->product->id,
                ]);
                $this->isInWishlist = true;
                session()->flash('message', 'Added to wishlist.');
            }
        } else {
            session()->flash('error', 'Please login to manage your wishlist.');
        }
    }

    public function render()
    {
        return view('livewire.add-to-wishlist');
    }
}

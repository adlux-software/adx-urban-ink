<?php

namespace App\Livewire;

use App\Models\Cart;
use Livewire\Component;

class CartCounter extends Component
{
    public $cartCount;

    public function mount()
    {
        $this->checkCartCount();
    }

    #[On('CartAddedUpdated')]
    public function checkCartCount()
    {
        if (auth()->check()) {
            $cart = Cart::firstOrCreate(['user_id' => auth()->id()]);
        } else {
            $cart = Cart::firstOrCreate(['session_id' => session()->getId()]);
        }
        $this->cartCount = $cart->totalProductCount->count();
    }

    public function render()
    {
        return view('livewire.cart-counter', [
            'cartCount' => $this->cartCount
        ]);
    }
}

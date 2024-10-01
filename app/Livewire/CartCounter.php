<?php

namespace App\Livewire;

use App\Models\Cart;
use Livewire\Attributes\On;
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
        if (auth('web')->check()) {
            $cart = Cart::firstOrCreate(['user_id' => auth('web')->user()->id]);
        } else {
            $cart = Cart::firstOrCreate(['session_id' => session()->get('cart_session_id')]);
        }

        $this->cartCount = $cart->itemsCount()->count();
    }

    public function render()
    {
        return view('livewire.cart-counter', [
            'cartCount' => $this->cartCount
        ]);
    }
}

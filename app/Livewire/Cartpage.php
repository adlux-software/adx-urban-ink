<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Variant;
use Livewire\Component;

class Cartpage extends Component
{
    public $cart;
    public $warning = '';

    public function mount()
    {
        $session_id = session()->get('cart_session_id', null);
        $user_id = auth('web')->check() ? auth('web')->user()->id : null;

        $this->cart = Cart::when($session_id, function ($query, $session_id) {
            return $query->where('session_id', $session_id);
        })
            ->when($user_id, function ($query, $user_id) {
                return $query->where('user_id', $user_id);
            })
            ->with('variants', 'products')
            ->first();

        if ($this->cart) {
            $this->calculateTotal();
        } else {
            $this->warning = 'No cart found for the current session or user.';
        }
    }

    public function incrementQuantity(int $product_id)
    {
        if (!$this->cart) {
            $this->warning = 'No cart found.';
            return;
        }

        foreach ($this->cart->products as $product) {
            if ($product->pivot->id == $product_id) {
                $variant = Variant::find($product->pivot->variant_id);
                $new_quantity = $product->pivot->quantity + 1;

                if ($new_quantity > $variant->stock) {
                    $this->warning = 'You cannot have more than ' . $variant->stock . ' quantity of this product in your cart.';
                    return;
                }

                $product->pivot->quantity = $new_quantity;
                $product->pivot->price = $variant->selling_price * $new_quantity;
                $product->pivot->save();

                $this->calculateTotal();
                return;
            }
        }
    }

    public function decrementQuantity(int $product_id)
    {
        if (!$this->cart) {
            $this->warning = 'No cart found.';
            return;
        }

        foreach ($this->cart->products as $product) {
            if ($product->pivot->id == $product_id) {
                if ($product->pivot->quantity <= 1) {
                    $this->warning = 'You cannot have less than 1 quantity of a product in your cart.';
                    return;
                }

                $new_quantity = $product->pivot->quantity - 1;
                $variant = Variant::find($product->pivot->variant_id);

                $product->pivot->quantity = $new_quantity;
                $product->pivot->price = $variant->selling_price * $new_quantity;
                $product->pivot->save();

                $this->calculateTotal();
                return;
            }
        }
    }

    public function calculateTotal()
    {
        if (!$this->cart) {
            return;
        }

        $this->cart->total = $this->cart->products->sum(function ($product) {
            return $product->pivot->price;
        });

        $this->cart->save();
    }

    public function removeProduct(int $product_id)
    {
        if (!$this->cart) {
            $this->warning = 'No cart found.';
            return;
        }

        foreach ($this->cart->products as $product) {
            if ($product->pivot->id == $product_id) {
                $product->pivot->delete();
                $this->cart->products->forget($this->cart->products->search($product));
                $this->calculateTotal();
                $this->cart->save();
                return;
            }
        }
    }

    public function render()
    {
        return view('livewire.cartpage');
    }
}

<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Variant;
use Livewire\Component;

class Cartpage extends Component
{
    public $cart;

    public $total = 0;

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

        $this->calculateTotal();
    }

    public function incrementQuantity(int $product_id)
    {
        foreach ($this->cart->products as $product) {

            if ($product->pivot->id == $product_id) {

                $variant = (new Variant())
                    ->where('id', $product->pivot->variant_id)
                    ->first();

                // get the current pivot quantity
                $quantity = $product->pivot->quantity;

                // new stock quantity
                $new_quantity = $quantity + 1;

                if ($product->pivot->quantity + 1 > $variant->stock) {
                    $product->pivot->quantity = $variant->stock;

                    $this->warning = 'You cannot have more than 10 quantity of a product in your cart.';
                    return;
                }

                $product->pivot->quantity = $new_quantity;

                $variant = (new Variant())
                    ->where('id', $product->pivot->variant_id)
                    ->first();

                $product->pivot->price = $variant->selling_price * $new_quantity;

                $product->pivot->save();
            }
        }

        // Recalculate the total
        $this->calculateTotal();
    }

    public function decrementQuantity(int $product_id)
    {
        foreach ($this->cart->products as $product) {
            if ($product->pivot->id == $product_id) {

                // get the current pivot quantity
                $quantity = $product->pivot->quantity;

                // Prevents the quantity from going below 1
                if ($quantity == 1) {
                    $this->warning = 'You cannot have less than 1 quantity of a product in your cart.';
                    return;
                }

                // new stock quantity
                $new_quantity = $quantity - 1;

                $product->pivot->quantity = $new_quantity;

                $variant = (new Variant())
                    ->where('id', $product->pivot->variant_id)
                    ->first();

                $product->pivot->price = $variant->selling_price * $new_quantity;

                $product->pivot->save();
            }
        }

        $this->calculateTotal();
    }

    public function calculateTotal()
    {
        $this->cart = calculate_cart_total($this->cart->id);
    }

    public function removeProduct(int $product_id)
    {
        foreach ($this->cart->products as $product) {
            if ($product->pivot->id == $product_id) {
                $product->pivot->delete();
                $this->cart = Cart::with('variants', 'products')->find($this->cart->id);
                $this->calculateTotal();
                $this->cart->save();
            }
        }
    }

    public function render()
    {
        return view('livewire.cartpage', ['total' => $this->total]);
    }
}

<?php
namespace App\Livewire;

use App\Models\Variant;
use Livewire\Component;
use App\Models\Cart;

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

                // get the current pivot quantity
                $quantity = $product->pivot->quantity;

                // new stock quantity
                $new_quantity = $quantity + 1;

                // update the pivot quantity
                $product->pivot->quantity = $new_quantity;
                $product->pivot->save();
            }
        }

        // Recalculate the total
        $this->calculateTotal();
        $this->cart->total = $this->total;
        $this->cart->save();

        $this->cart = Cart::with('variants', 'products')->find($this->cart->id);
    }

    public function decrementQuantity(int $product_id)
    {
        foreach ($this->cart->products as $product) {
            if ($product->pivot->id == $product_id) {

                // get the current pivot quantity
                $quantity = $product->pivot->quantity;

                // new stock quantity
                $new_quantity = $quantity - 1;

                $product->pivot->quantity = $new_quantity;
                $product->pivot->save();
            }
        }

        $this->calculateTotal();
        $this->cart->total = $this->total;
        $this->cart->save();
        $this->cart = Cart::with('variants', 'products')->find($this->cart->id);


    }

    public function calculateTotal()
    {
        $this->total = 0;
        foreach ($this->cart->products as $product) {
            $product_total = $product->variants->first()->selling_price * $product->pivot->quantity;
            $this->total += $product_total;
            $product->pivot->price = $product_total;
            $product->pivot->save();
        }
    }

    public function removeProduct(int $product_id)
    {
        foreach ($this->cart->products as $product) {
            if ($product->pivot->id == $product_id) {
                $product->pivot->delete();
                $this->cart = Cart::with('variants', 'products')->find($this->cart->id);
                $this->calculateTotal();
                $this->cart->total = $this->total;
                $this->cart->save();
            }
        }
    }

    public function render()
    {
        return view('livewire.cartpage', ['total' => $this->total]);
    }
}

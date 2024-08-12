<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartCheckout extends Component
{
    public $carts;
    public $totalProductAmount;
    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $zip;
    public $payment_mode;
    public $payment_id;
    public $create_account = false;
    public $ship_different_address = false;
    public $notes = '';

    protected $rules = [
        'firstName' => 'required|string|max:255',
        'lastName' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'address' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'zip' => 'required|string|max:10',
        'payment_mode' => 'required|string',
        'payment_id' => 'nullable|string',
    ];

    public function mount()
    {
        $this->carts = Cart::with('variants.product', 'variants.color', 'variants.size')->where('user_id', Auth::id())->get();
        $this->totalProductAmount = $this->calculateTotalAmount();
    }



    public function placeOrder()
    {
        $validatedData = $this->validate();

        if ($this->payment_mode !== 'cod' && empty($this->payment_id)) {
            $this->addError('payment_id', 'Payment ID cannot be null for non-COD orders.');
            return;
        }

        $order = Order::create([
            'user_id' => Auth::id(),
            'firstname' => $this->firstName,
            'lastname' => $this->lastName,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'city' => $this->city,
            'zip' => $this->zip,
            'total' => $this->totalProductAmount + 30.00, // Including shipping
            'payment_mode' => $this->payment_mode,
            'payment_id' => $this->payment_id,
            'status' => 'pending',
            'notes' => $this->notes,
        ]);

        foreach ($this->carts as $cart) {
            foreach ($cart->variants as $variant) {
                if (is_null($variant->product_id) || is_null($variant->id)) {
                    throw new \Exception('Product ID or Variant ID is missing for some cart items. Cart Item: '.json_encode($cart));
                }

                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $variant->product_id,
                    'variant_id' => $variant->id,
                    'quantity' => $variant->pivot->quantity,
                    'price' => $variant->pivot->price,
                    'total' => $variant->pivot->price * $variant->pivot->quantity,
                ]);
            }
        }

        Cart::where('user_id', Auth::id())->delete();

        session()->flash('message', 'Order placed successfully!');

        return redirect()->route('order.success');
    }



    public function calculateTotalAmount()
    {
        $totalProductAmount = 0;

        if ($this->carts->isEmpty()) {
            return $totalProductAmount;
        }

        foreach ($this->carts as $cart) {
            foreach ($cart->variants as $variant) {
                $totalProductAmount += $variant->selling_price * $variant->pivot->quantity;
            }
        }

        return $totalProductAmount;
    }




    public function render()
    {
        return view('livewire.cart-checkout', [
            'totalProductAmount' => $this->totalProductAmount,
        ]);
    }
}

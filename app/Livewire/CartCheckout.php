<?php
namespace App\Livewire;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Redirect;

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

    public function mount()
    {
        $this->totalProductAmount = $this->calculateTotalAmount();
    }

    public function placeOrder()
    {
        if ($this->payment_mode !== 'cod' && empty($this->payment_id)) {
            throw new \Exception('Payment ID cannot be null for non-COD orders.');
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
            'total' => $this->totalProductAmount,
            'payment_mode' => $this->payment_mode,
            'payment_id' => $this->payment_id,
            'status' => 'pending',
        ]);

        foreach ($this->carts as $cartItem) {
            foreach ($cartItem->variants as $variant) {
                if (is_null($variant->product_id) || is_null($variant->id)) {
                    throw new \Exception('Product ID or Variant ID is missing for some cart items. Cart Item: '.json_encode($cartItem));
                }

                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $variant->product_id,
                    'variant_id' => $variant->id,
                    'quantity' => $variant->pivot->quantity,
                    'price' => $variant->pivot->price,
                    'total' => $variant->pivot->price,
                ]);
            }
        }

        Cart::where('user_id', Auth::id())->delete();

        session()->flash('message', 'Order placed successfully!');

        return redirect()->route('order.success');
    }

    public function calculateTotalAmount()
    {
        $this->carts = Cart::with('variants')->where('user_id', Auth::id())->get();
        $totalProductAmount = 0;
        foreach ($this->carts as $cart) {
            foreach ($cart->variants as $variant) {
                if (is_null($variant->product_id) || is_null($variant->id)) {
                    throw new \Exception('Product ID or Variant ID is missing for some cart items. Cart Item: '.json_encode($cart));
                }
                $totalProductAmount += $variant->pivot->price;
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

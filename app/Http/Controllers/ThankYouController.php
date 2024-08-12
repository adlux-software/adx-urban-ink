<?php

namespace App\Http\Controllers;

use App\Notifications\OrderConfirmationNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Models\Order;

use Illuminate\Support\Facades\Auth;

class ThankYouController extends Controller
{
    public function index()
    {
//        return view('thank-you'); // Ensure this view file exists

        // get order DETAILS pass to viEW
        $order = Order::with('items.variant.product', 'items.variant.color', 'items.variant.size')->where('user_id', Auth::id())->latest()->first();

        if(!$order->user){

            // If the user did not log in as a user before making the order

            $email = $order->email;

            Notification::route('mail', $email)
                ->notify(new OrderConfirmationNotification($order));

        } else {

            // If the user account ALREADY exists in the order details relationship
            // write the code if a user account exists
        }


        return view('thank-you', compact('order'));
    }
}

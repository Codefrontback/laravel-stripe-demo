<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Stripe\Stripe;

class PaymentController extends Controller
{
    public function payWithStripe()
    {
        return view('payment');
    }
    public function postPayment(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $token = $request->get('stripe_token');

        $charge = \Stripe\Charge::create([
            'amount' => 1*1000,
            'currency' => 'usd',
            'description' => 'Example charge',
            'source' => $token,
        ]);

        session()->flash('success', 'Payment Successful');
        return redirect()->route('make:payment');
    }
}

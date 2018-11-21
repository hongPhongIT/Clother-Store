<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderActivationEmail extends Mailable {

    protected $bill;

    use Queueable,
        SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($bill) {
        $this->bill = $bill;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
         return $this->view('includes.OrderConfirmationEmail')->with(['user' => $user, 
                            'products' => $cart->items, 'totalQty' => $cart->totalQty,
                            'totalPrice' => $cart->totalPrice,'bill' => $bill]);
    }

}

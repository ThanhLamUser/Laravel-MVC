<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentSuccess extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $orderDetails;

    public function __construct($user, $orderDetails)
    {
        $this->user = $user;
        $this->orderDetails = $orderDetails;
    }

    public function build()
    {
        return $this->view('emails.payment_success')
                    ->subject('Payment Successful')
                    ->with([
                        'user' => $this->user,
                        'orderDetails' => $this->orderDetails,
                    ]);
    }
}

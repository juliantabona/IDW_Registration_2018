<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class IDWPaymentFail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $transaction;

    /**
     * Create a new message instance.
     */
    public function __construct($user, $transaction)
    {
        $this->user = $user;
        $this->transaction = $transaction;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Payment Unsuccessful For '.$this->user->first_name.' '.$this->user->last_name)
                    ->view('email.idw_team.paymentFailEmail');
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BankTranferRequest extends Mailable
{
    use Queueable, SerializesModels;
    public $user;

    /**
     * Create a new message instance.
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Bank Transfer Details')
                    ->attach(public_path('/pdf/Bank_Transfer_Details.pdf'))
                    ->view('email.BankTranferDetailsEmail');
    }
}

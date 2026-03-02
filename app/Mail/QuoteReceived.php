<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $quoteData;

    public function __construct($quoteData)
    {
        $this->quoteData = $quoteData;
    }

    public function build()
    {
        return $this->subject('We have received your quote request!')
            ->view('emails.quote_received');
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $quoteData;
    public $files;
    public $isAdmin;

    public function __construct($quoteData, $files = [], $isAdmin = false)
    {
        $this->quoteData = $quoteData;
        $this->files = $files;
        $this->isAdmin = $isAdmin;
    }

    public function build()
    {
        $customerEmail = data_get($this->quoteData, 'email');
        $customerName  = data_get($this->quoteData, 'name');

        $mail = $this->from(config('mail.from.address'), 'Kulu Windows & Doors')
            ->replyTo($customerEmail, $customerName)
            //->bcc('sungur99@gmail.com')
            ->subject('We have received your message!')
            ->view('emails.quote_received');

        // Eğer kullanıcı dosya yüklediyse, döngüye sokup her birini mailin içine gömüyoruz
        if (!empty($this->files)) {
            foreach ($this->files as $file) {
                // doyları al ve e-postaya ekle
                $mail->attach($file->getRealPath(), [
                    'as' => $file->getClientOriginalName(),
                    'mime' => $file->getClientMimeType(),
                ]);
            }
        }

        return $mail;
    }
}

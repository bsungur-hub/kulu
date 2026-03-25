<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;
    public $files;
    public $isAdmin;

    public function __construct($contactData, $files = [], $isAdmin = false)
    {
        $this->contactData = $contactData;
        $this->files = $files;
        $this->isAdmin = $isAdmin;
    }

    public function build()
    {
        $customerEmail = data_get($this->contactData, 'email');
        $customerName  = data_get($this->contactData, 'name');

        $mail = $this->from(config('mail.from.address'), 'Kulu Windows & Doors')
            ->replyTo($customerEmail, $customerName)
            //->bcc('sungur99@gmail.com')
            ->subject('We have received your message!')
            ->view('emails.contact_received');

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

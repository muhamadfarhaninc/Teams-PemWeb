<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AuthMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function attachments(): array
    {
        return [];
    }

    public function build(){
        return $this->subject('Verifikasi Akun')
                ->view('mail/verify');
    }
}

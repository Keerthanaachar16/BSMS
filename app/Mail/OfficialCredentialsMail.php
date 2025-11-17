<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OfficialCredentialsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $password;

    public function __construct($name, $email, $phone, $password)
    {
        $this->name     = $name;
        $this->email    = $email;
        $this->phone    = $phone;
        $this->password = $password;
    }

    public function build()
    {
        return $this->subject('Your Login Credentials')
                    ->view('emails.official_credentials');
    }
}
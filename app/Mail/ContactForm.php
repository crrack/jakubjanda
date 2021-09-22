<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     */
    protected $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contact-form', ['email' => $this->email])
            ->from("noreply@jakubjanda.cz", "Jakub Janda - Kontaktní formulář")
            ->replyTo("jakubjanda@jakubjanda.cz", "Jakub Janda")
            ->subject("Zpráva z kontaktního formuláře");
    }
}
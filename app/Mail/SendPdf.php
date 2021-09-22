<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendPdf extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.send-pdf')
            ->from("noreply@jakubjanda.cz", "Jakub Janda")
            ->replyTo("jakubjanda@jakubjanda.cz", "Jakub Janda")
            ->subject("Zpráva o mandátu");
    }
}
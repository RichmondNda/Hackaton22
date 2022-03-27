<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResultatEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data ;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $maildata)
    {
        $this->data = $maildata ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.resultatEmail')
                        ->with('data', $this->data)
                        ->subject("Resultat du technovore Hackathon");
    }
}

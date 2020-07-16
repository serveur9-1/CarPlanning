<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class KilometrageMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($event)
    {
        $this->event = $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("noreply@carPlanning.ci", "Service carPlanning")
                    ->subject("Modification de kilométrage")
                    ->to("ymjm97@gmail.com")
                    ->markdown('emails.kilometrage')->with([
                        "marque" => $this->event["marque"],
                        "immatriculation" => $this->event["immatriculation"]
                    ]);
    }
}

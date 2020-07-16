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
                    ->subject($this->event->subject)
                    ->to($this->event->receiver)
                    ->markdown('emails.name')->with([
                        'user' => $this->event->user,
                        'is_enable' => $this->event->is_enable,
                    ]);
    }
}

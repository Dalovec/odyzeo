<?php

namespace App\Mail;

use App\Custom\Ticket;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TicketFiled extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $ticket;

    public function __construct(Ticket $ticket)
    {
        $this->ticket = $ticket;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if(null == ($this->ticket->getFile())){
            return $this->from('odyzeo.task@task.odyzeo','Odyzeo-task')
                ->view('emails.tickets.filed');
        }

        return $this->from('odyzeo.task@task.odyzeo','Odyzeo-task')
            ->view('emails.tickets.filed')
            ->attachFromStorageDisk('public','images/'.$this->ticket->getFile(), 'attachment');
    }
}

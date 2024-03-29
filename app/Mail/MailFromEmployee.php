<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailFromEmployee extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $resume;
    public $job;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $resume, $job)
    {
        $this->data = $data;
        $this->resume = $resume;
        $this->job = $job;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->markdown('emails.employees.requested')
            ->from(env('MAIL_USERNAME'))
            ->with(['data' => $this->data, 'resume' => $this->resume, 'job' => $this->job]);
    }
}

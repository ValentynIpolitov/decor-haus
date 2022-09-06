<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Contact;

class ContactFormFilled extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    public $subject = "Contact Form Data recieved! 🆕📝";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact = null)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact_form_filled')->subject($this->subject);
    }
}

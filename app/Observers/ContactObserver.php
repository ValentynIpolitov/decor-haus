<?php

namespace App\Observers;

use App\Models\Contact;
use App\Services\MailSender;
use App\Mail\ContactFormFilled;

class ContactObserver
{
    /**
     * Handle the Contact "created" event.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function created(Contact $contact)
    {
        $mail = new ContactFormFilled($contact);
        // $mailsender = new MailSender($mail, 'vadimtiliguzov@gmail.com');
        // $mailsender = new MailSender($mail, 'sv.vartey@gmail.com');
        $mailsender = new MailSender($mail, 'decorhaus.sk@gmail.com');
        $mailsender->send();
    }

    /**
     * Handle the Contact "updated" event.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function updated(Contact $contact)
    {
        //
    }

    /**
     * Handle the Contact "deleted" event.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function deleted(Contact $contact)
    {
        //
    }

    /**
     * Handle the Contact "restored" event.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function restored(Contact $contact)
    {
        //
    }

    /**
     * Handle the Contact "force deleted" event.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function forceDeleted(Contact $contact)
    {
        //
    }
}

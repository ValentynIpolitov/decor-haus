<?php

namespace App\Services;

use App\Jobs\SendEmail;
use App\Log;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\DB;

class MailSender
{
    private $mailable;
    private $recipient;
    private $when;

    /**
     * MailSender constructor.
     * @param Mailable $mailable
     * @param $recipient
     * @param null $when
     */
    public function __construct(Mailable $mailable, $recipient, $object = null, $when = null, $mailer = null)
    {
        $this->mailable = $mailable;
        $this->object = $object;
        $this->recipient = $recipient;
        $this->when = $when;

        if ($this->object) {
            $this->mailable->with('object', $this->object);
        }
        $this->mailer = $mailer;
    }

    /**
     * Function to send an Email.
     *
     * Returns 0 in case that sending is impossible.
     * Returns messageId in case that message was stored in queue to send it.
     *
     * @return boolean.
     */
    public function send()
    {
        if (!$this->sendingEmailsAllowed($this->recipient)) {
            Log::debug('Sending emails disabled: ' . $this->recipient);
            return 1;
        }

        //send as job, then resolve status after job is done // AppServiceProvider
        $job = new SendEmail($this->recipient, $this->mailable);
        if ($this->when) {
            $job->delay($this->when);
        }
        $job->onQueue('low');
        dispatchJob($job);

        return 0;
    }

    
    /**
     * Check blacklists etc, dont send email if on blacklist
     * @param $recipient
     * @return false
     * @throws \Exception
     */
    private function sendingEmailsAllowed($recipient)
    {
        if (empty($recipient)) {
            Log::debug('Empty recepient: ' . $this->recepient);
            throw new \Exception("Empty recipient in Mailsender::deleted()");
        }
       
        if (config('app.sendEmail', 'Y') != 'Y') {
            Log::debug('Sending real emails are dissaloved: ' . $this->recepient);
            return false;
        }

        return true;
    }
}

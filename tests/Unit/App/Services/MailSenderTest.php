<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\MailSender;
use App\Mail\ContactFormFilled;

class MailSenderTest extends TestCase
{
    public function test_example()
    {
        $this->assertTrue(true);
        $email_address = "sv.vartey@gmail.com";
        $mailable = new ContactFormFilled(); 
        $service  = new MailSender($mailable, $email_address);

        $service->send();
    }
}

<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;

class SendEmail implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    private $recepient;

    private $mailable;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($recepient, Mailable $mailable)
    {
        $this->recepient = $recepient;
        $this->mailable = $mailable;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            if (config('app.sendEmail', 'Y') == 'Y') {
                Log::debug('Real email to: ' . $this->recepient);
                Mail::to($this->recepient)->send($this->mailable);
            } else {
                Log::debug('Fake email to: ' . $this->recepient);
            }
        } catch (\Exception $e) {
            Log::debug('Exception in email job: ' . $e->getMessage());
            throw $e;
        }
    }
}

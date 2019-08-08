<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Setting;
class SendMailContact extends Mailable
{
    use Queueable, SerializesModels;
    public $contact = array();
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
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
        // return $this->view('view.name');
        
        $from = Setting::where('code', 'email')->first()->value;
        // $site_name = Setting::where('key','config_site_name')->first()->value;
        return $this->to($from)
                    // ->subject($this->contact['subject'])
                    ->subject('Contact')
                    ->view('mail.contact');
    }
}

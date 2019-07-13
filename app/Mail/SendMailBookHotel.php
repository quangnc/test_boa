<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Setting;

class SendMailBookHotel extends Mailable
{
    use Queueable, SerializesModels;
    public $data = array();
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
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

        return $this->from($from)
                    // ->subject($this->contact['subject'])
                    ->subject('Book Hotel')
                    ->view('mail.book-hotel');
    }
}

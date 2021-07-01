<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $DonDatHang;
    public function __construct($DonDatHang)
    {
        $this->subject('Don Dat Hang');
        $this->$DonDatHang = $DonDatHang;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('fantacam14@gmail.com','Công ty bán hàng online')->view('emails.donhang');
    }
}

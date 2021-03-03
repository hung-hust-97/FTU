<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterMember extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
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
        return $this->subject('[CUỘC THI I-INVEST! 2021] VÒNG 1: I-START!: ĐĂNG KÝ THÀNH CÔNG')
            ->view('2019.mails.dangky')
            ->with([
                'name'=>$this->data['name'],
                'temp_password' => $this->data['temp_password'],
                'email' => $this->data['email']
            ]);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NoticeResult extends Mailable
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
        return $this->subject('[CUỘC THI I-INVEST! 2021] VÒNG 1: I-START!: CHÚC MỪNG BẠN ĐÃ HOÀN THÀNH PHẦN THI ')
            ->view('2019.mails.ketqua')
            ->with([
                'name'=>$this->data['name'],
            ]);
    }
}

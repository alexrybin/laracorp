<?php

namespace Corp\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Mailcontroller extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public function __construct()
    {
        //
        //$this->data = $data;
    }


    public function build()
    {
        return $this->view('pink.email')
            ->with([
                'data' => $this->data

            ]);
    }
}
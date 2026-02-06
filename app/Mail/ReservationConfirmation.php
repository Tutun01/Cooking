<?php

namespace App\Mail;


use App\Models\BookingRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservationConfirmation extends Mailable
{
    use Queueable, SerializesModels;


    public $reservation;

    public function __construct(BookingRequest $reservation)
    {
        $this->reservation = $reservation;
    }

    public function build()
    {
        return $this
            ->subject('Your reservation request has been received')
            ->view('reservation-confirmation');
    }
}

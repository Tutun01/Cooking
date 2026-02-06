<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationSubmitted;
use App\Mail\ReservationConfirmation;

class ReservationController extends Controller
{
public function create()
    {
        $reservedDates = BookingRequest::whereIn('status', ['pending', 'approved'])
            ->pluck('requested_date')
            ->unique()
            ->values();

        return view('reservation', compact('reservedDates'));
    }

    public function store(Request $request)
    {
        $reservation = BookingRequest::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'service_id' => $request->service_id,
            'number_of_people' => $request->number_of_people,
            'address' => $request->address,
            'requested_date' => $request->requested_date,
            'requested_time' => $request->requested_time,
            'message' => $request->message,
            'status' => 'pending',
        ]);

        Mail::to($reservation->email)
            ->send(new ReservationConfirmation($reservation));

        return redirect('/reservation')
            ->with('success', 'Reservation sent! Check your email.');
    }
}

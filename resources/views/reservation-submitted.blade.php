<h2>Reservation Received</h2>

<p>Dear {{ $booking->name }},</p>

<p>
    Your reservation request for <strong>{{ $booking->requested_date }}</strong>
    at <strong>{{ $booking->requested_time }}</strong> has been received.
</p>

<p>
    We will contact you shortly to confirm availability.
</p>

<p>Luxury Chef Team</p>

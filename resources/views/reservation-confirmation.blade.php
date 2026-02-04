<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reservation Confirmation</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f5f5f5; padding:30px">

    <div style="max-width:600px;margin:auto;background:#ffffff;padding:30px;border-radius:8px">
        <h2 style="color:#c9a24d">Luxury Chef</h2>

        <p>Hello <strong>{{ $reservation->name }}</strong>,</p>

<p>
    Thank you for your reservation request.<br>
    We have received your booking with the following details:
</p>

<ul>
    <li><strong>Date:</strong> {{ $reservation->requested_date }}</li>
    <li><strong>Time:</strong> {{ $reservation->requested_time }}</li>
</ul>

<p>
    Our team will review your request and contact you shortly.
</p>

<p style="margin-top:30px">
    Kind regards,<br>
    <strong>Luxury Chef Team</strong>
</p>
</div>

</body>
</html>

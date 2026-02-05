@extends('layout')

@section("title")
    Reservation
@endsection

@section('pageContent')
    <div class="reservation-page">
        <div class="reservation-wrapper">
            <h1>Book Your Reservation</h1>

            <form class="reservation-form" method="POST" action="/reservation">
                @csrf

                <div class="form-row">
                    <input type="text" name="name"  value="{{ auth()->user()->name }}" readonly>
                    <input type="email" name="email" value="{{ auth()->user()->email }}" readonly>
                    <input type="number" name="phone" placeholder="phone" required>
                    <input type="text" name="address" placeholder="address" required>
                </div>

                <div class="form-row">
                    <input type="hidden" name="service_id" value="1">
                    <input type="number" name="number_of_people" placeholder="number of people" required>
                    <input type="text" id="requested_date" name="requested_date" required>
                    <input type="time" name="requested_time" required>
                </div>

                <div class="form-row">
                    <textarea name="message" placeholder="Additional notes (optional)"></textarea>
                </div>

                <button type="submit" class="reservation-btn">
                    Send Reservation
                </button>
            </form>
        </div>
    </div>
    <script>window.reservedDates = @json($reservedDates);</script>
@endsection

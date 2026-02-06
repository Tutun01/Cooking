<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingRequest extends Model
{
    protected $table = 'booking_requests';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'requested_date',
        'requested_time',
        'service_id',
        'number_of_people',
        'address',
        'message',
        'status'
    ];
}

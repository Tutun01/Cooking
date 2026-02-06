<?php

namespace Database\Seeders;
use App\Models\BookingRequest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BookingRequest::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '+1 555 123 456',
            'requested_date' => now()->addDays(7)->toDateString(),
            'requested_time' => '18:00',
            'service_id' => 1,
            'number_of_people' => 4,
            'address' => '123 Main Street, New York',
            'message' => 'Private dinner for a special occasion.',
            'status' => 'pending',
        ]);
    }
}

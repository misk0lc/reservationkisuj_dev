<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reservation::create([
        //     'name' => 'morzsa',
        //     'email' => 'morzsa@example.com',
        //     'reservation_time' => '2025-12-02 19:00:00',
        //     'guests' => 16,
        //     'note' => 'Birthday party',
        // ]);
        Reservation::factory()->count(10)->create();
    }
}

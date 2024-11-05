<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;

class reservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reservation = new Reservation();
        $reservation->user_id = 1;
        $reservation->guest_id = 1;
        $reservation->room_id = 1;
        $reservation->check_in_date =now();
        $reservation->check_out_date = now();
        $reservation->total_price = 3000;
        $reservation->status = 1;
        $reservation->save();   



        $reservation = new Reservation();
        $reservation->user_id = 1;
        $reservation->guest_id = 1;
        $reservation->room_id = 1;
        $reservation->check_in_date =now();
        $reservation->check_out_date = now();
        $reservation->total_price = 3000;
        $reservation->status = 1;
        $reservation->save();   

        $reservation = new Reservation();
        $reservation->user_id = 1;
        $reservation->guest_id = 1;
        $reservation->room_id = 1;
        $reservation->check_in_date =now();
        $reservation->check_out_date = now();
        $reservation->total_price = 3000;
        $reservation->status = 1;
        $reservation->save();   


        $reservation = new Reservation();
        $reservation->user_id = 1;
        $reservation->guest_id = 1;
        $reservation->room_id = 1;
        $reservation->check_in_date =now();
        $reservation->check_out_date = now();
        $reservation->total_price = 3000;
        $reservation->status = 1;
        $reservation->save();   

        $reservation = new Reservation();
        $reservation->user_id = 1;
        $reservation->guest_id = 1;
        $reservation->room_id = 1;
        $reservation->check_in_date =now();
        $reservation->check_out_date = now();
        $reservation->total_price = 3000;
        $reservation->status = 1;
        $reservation->save();   


        $reservation = new Reservation();
        $reservation->user_id = 1;
        $reservation->guest_id = 1;
        $reservation->room_id = 1;
        $reservation->check_in_date =now();
        $reservation->check_out_date = now();
        $reservation->total_price = 3000;
        $reservation->status = 1;
        $reservation->save();   
    }
}

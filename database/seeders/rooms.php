<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class rooms extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $room = new Room();
        $room->room_type = "single";
        $room->price_per_neight = 500;
        $room->is_VIB = 1;
        $room->description =" it is a wonder full room" ;
        $room->status = 0;
        $room->save();
        
        $room = new Room();
        $room->room_type = "double";
        $room->price_per_neight = 500;
        $room->is_VIB = 1;
        $room->description =" it is a wonder full room" ;
        $room->status = 0;
        $room->save();

        $room = new Room();
        $room->room_type = "triple";
        $room->price_per_neight = 2000;
        $room->is_VIB = 1;
        $room->description =" it is a wonder full room" ;
        $room->status = 1;
        $room->save();
        

        $room = new Room();
        $room->room_type = "double";
        $room->price_per_neight = 500;
        $room->is_VIB = 1;
        $room->description =" it is a wonder full room" ;
        $room->status = 0;
        $room->save();

        $room = new Room();
        $room->room_type = "single";
        $room->price_per_neight = 500;
        $room->is_VIB = 0;
        $room->description =" it is a wonder full room" ;
        $room->status = 1;
        $room->save();
    }
}

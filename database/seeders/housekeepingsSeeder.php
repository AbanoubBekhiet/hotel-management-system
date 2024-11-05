<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Housekeeping;

class housekeepingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $house = new Housekeeping();
        $house->room_id  = 1;
        $house->user_id  = 1;
        $house->date = now();
        $house->note ="the room is needed to be cleaned";
        $house->status = 1;
        $house->save();   

        $house = new Housekeeping();
        $house->room_id  = 1;
        $house->user_id  = 1;
        $house->date = now();
        $house->note ="the room is needed to be cleaned";
        $house->status = 1;
        $house->save();   
        
    

        $house = new Housekeeping();
        $house->room_id  = 1;
        $house->user_id  = 1;
        $house->date = now();
        $house->note ="the room is needed to be cleaned";
        $house->status = 1;
        $house->save();   


        $house = new Housekeeping();
        $house->room_id  = 1;
        $house->user_id  = 1;
        $house->date = now();
        $house->note ="the room is needed to be cleaned";
        $house->status = 1;
        $house->save();   

        $house = new Housekeeping();
        $house->room_id  = 1;
        $house->user_id  = 1;
        $house->date = now();
        $house->note ="the room is needed to be cleaned";
        $house->status = 1;
        $house->save();   
    }
}

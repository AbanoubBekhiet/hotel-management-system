<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Maintenance;

class maintenancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $main = new Maintenance();
        $main->room_id = 1;
        $main->user_id = 1;
        $main->requested_date = now();
        $main->completed_date =now();
        $main->cost = 300;
        $main->description = "room walls repairs";
        $main->status = 0;
        $main->created_at = now();
        $main->updated_at = now();
        $main->save();      

        $main = new Maintenance();
        $main->room_id = 1;
        $main->user_id = 1;
        $main->requested_date = now();
        $main->completed_date =now();
        $main->cost = 300;
        $main->description = "room walls repairs";
        $main->status = 0;
        $main->created_at = now();
        $main->updated_at = now();
        $main->save();      
    
    
        $main = new Maintenance();
        $main->room_id = 1;
        $main->user_id = 1;
        $main->requested_date = now();
        $main->completed_date =now();
        $main->cost = 300;
        $main->description = "room walls repairs";
        $main->status = 0;
        $main->created_at = now();
        $main->updated_at = now();
        $main->save();      



        $main = new Maintenance();
        $main->room_id = 1;
        $main->user_id = 1;
        $main->requested_date = now();
        $main->completed_date =now();
        $main->cost = 300;
        $main->description = "room walls repairs";
        $main->status = 0;
        $main->created_at = now();
        $main->updated_at = now();
        $main->save();      


        $main = new Maintenance();
        $main->room_id = 1;
        $main->user_id = 1;
        $main->requested_date = now();
        $main->completed_date =now();
        $main->cost = 300;
        $main->description = "room walls repairs";
        $main->status = 0;
        $main->created_at = now();
        $main->updated_at = now();
        $main->save();      
    }


}

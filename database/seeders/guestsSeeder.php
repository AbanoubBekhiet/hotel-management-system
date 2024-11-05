<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guest;

class guestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guest = new Guest();
        $guest->first_name = "mohamed";
        $guest->last_name = "ahmed";
        $guest->email = "mohamedkjoidofdwef@gmal.com";
        $guest->phone_number ="01254445454";
        $guest->address = "egypt alexandria";
        $guest->save();      
        


        $guest = new Guest();
        $guest->first_name = "abanoub";
        $guest->last_name = "bekhiet";
        $guest->email = "abanoubkjoidofwedf@gmal.com";
        $guest->phone_number ="01254345454";
        $guest->address = "egypt alexandria";
        $guest->save();  



        $guest = new Guest();
        $guest->first_name = "mona";
        $guest->last_name = "mohamed";
        $guest->email = "monajoidofvbgdf@gmal.com";
        $guest->phone_number ="01254845454";
        $guest->address = "egypt alexandria";
        $guest->save();  


        $guest = new Guest();
        $guest->first_name = "abanoub";
        $guest->last_name = "bekhiet";
        $guest->email = "abanoubkjoidoddsfdf@gmal.com";
        $guest->phone_number ="01254045454";
        $guest->address = "egypt alexandria";
        $guest->save();  



        $guest = new Guest();
        $guest->first_name = "abanoub";
        $guest->last_name = "bekhiet";
        $guest->email = "abanoubkjoidofsdf@gmal.com";
        $guest->phone_number ="01254545454";
        $guest->address = "egypt alexandria";
        $guest->save();  



        $guest = new Guest();
        $guest->first_name = "said";
        $guest->last_name = "ali";
        $guest->email = "alikweoidofdf@gmal.com";
        $guest->phone_number ="01254545454";
        $guest->address = "egypt alexandria";
        $guest->save();  
    }
}

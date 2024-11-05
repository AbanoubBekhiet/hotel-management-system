<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'first_name' => "abanoub",
            'last_name' => "bekhiet",
            'email' => "admin@gmail.com",
            'phone' => 01234343434,
            'role' => "admin",
            'shift' => 1,
            'salary' => 15000,
            'email_verified_at' => now(),
            'password' => Hash::make("abanoub"),
        ]);
        $this->call([
            rooms::class,
            guestsSeeder::class,
            housekeepingsSeeder::class,
            maintenancesSeeder::class,
            reservationsSeeder::class,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::create([
            "name" => "Lucas",
            "email" => "lucasbender408@gmail.com",
            "password" => bcrypt("LucasGabriel408"),
        ]);
    }
}

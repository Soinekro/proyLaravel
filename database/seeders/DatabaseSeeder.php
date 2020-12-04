<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->times(1)->create([
            "name" => "Elder Chumacero",
            "email" => "echumaceroj@gmail.com",
            "password" => bcrypt("password")
        ]);
        Project::factory()->times(40)->create();
  
    }
}

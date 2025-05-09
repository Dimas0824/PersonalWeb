<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Dimas',
            'email' => 'dimassmadapas@gmail.com',
            'password' => bcrypt('dimas24'),
        ]);

        $this->call([
            PersonalInfoSeeder::class,
            ServiceSeeder::class,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        Service::create([
            'name' => 'Database Management',
            'order' => 1,
        ]);

        Service::create([
            'name' => 'Backend Development',
            'order' => 2,
        ]);

        Service::create([
            'name' => 'Web Development',
            'order' => 3,
        ]);

        Service::create([
            'name' => 'System Information',
            'order' => 4,
        ]);
    }
}

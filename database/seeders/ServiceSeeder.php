<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        Service::create([
            'name' => 'Digital Marketing',
            'order' => 1,
        ]);

        Service::create([
            'name' => 'Website Development',
            'order' => 2,
        ]);

        Service::create([
            'name' => 'UI/UX Design',
            'order' => 3,
        ]);

        Service::create([
            'name' => 'Email Marketing',
            'order' => 4,
        ]);
    }
}

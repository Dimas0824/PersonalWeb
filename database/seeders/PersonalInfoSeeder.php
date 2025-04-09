<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PersonalInfo;

class PersonalInfoSeeder extends Seeder
{
    public function run()
    {
        PersonalInfo::create([
            'name' => 'Muhammad Irsyad Dimas Abdillah',
            'title' => 'Web Designer & Developer Enthusiast',
            'description' => 'Innovative Digital Marketer with Expertise in Driving Online Growth Through Strategic Campaigns.',
            'skills' => ['Web Designer', 'Database Designer', 'Frontend Developer', 'Backend Developer'],
            'email' => 'dimassmadapas@gmail.com',
            'whatsapp_number' => '+628123456789'
        ]);
    }
}

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
            'title' => 'Department of Information Technology, D-IV Informatics Engineering',
            'description' => 'Saya seorang mahasiswa aktif di Politeknik Negeri Malang (Polinema), jurusan Teknologi Informasi,
                    Program Studi D-IV Teknik Informatika.
                    Saya memiliki minat yang kuat di bidang pengembangan backend, khususnya dalam pengelolaan basis data
                    dan sistem informasi.',
            'profile_image' => '36118399-c5c5-4f78-9662-40404aa9cc7b_removalai_preview.png',
            'skills' => [
                "PHP",
                "Database Designer",
                "Backend Developer",
                "Java",
                "Github",
                "HTML & CSS",
                "JavaScript",
                "Figma"
            ],
            'email' => 'dimassmadapas@gmail.com',
            'whatsapp_number' => '+628123456789',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

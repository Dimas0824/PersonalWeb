<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'description',
        'profile_image',
        'skills',
        'whatsapp_number',
        'email',
    ];

    protected $casts = [
        'skills' => 'array',
    ];
}

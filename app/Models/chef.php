<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chef extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'photo',
        'photo1', 
        'photo2',
        'photo3', 
        'photo4', 
        'About_Me',
        'Mobile', 
        'Facebook',
        'Twitter', 
        'youtube', 
        'instagram',
        'address', 
        'email',
        'PERSONAL_INFORMATION', 
        'PROFESSIONAL_SKILLS', 
        'GENERAL_KNOWLEDGE',
        'SIGNATURE_DISHES', 
        'CUSTOMER_SATISFIED',
        'COMMUNICATION_SKILLS', 
        'DISH1', 
        'DISH2',
        'DISH3', 
        'DISH4',
    ];
}

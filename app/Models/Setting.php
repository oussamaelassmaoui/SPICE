<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'banner_Global',
        'banner1',
        'banner2',
        'Sign_In_photo',
        'Sign_Up_photo',
        'New_Recipes',
    ];
}

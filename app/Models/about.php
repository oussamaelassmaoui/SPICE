<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;
    protected $fillable = [
        'ABOUT_US',
        'WHY_CHOOSE_US',
        'QUALITY_CHEFS',
        'SUPER_FAST_DELIVERY',
        'TABLE_RESERVATION',
        'ONLINE_ORDER',
        'menu',
        'banner_about_menu',
        'photo',
        'url_video',
    ];
}

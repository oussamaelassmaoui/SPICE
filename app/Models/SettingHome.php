<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingHome extends Model
{
    use HasFactory;
    protected $fillable = [
        'DELICIOUS_FOOD',
        'banner_Global',
        'photo_Global',
        'banner1',
        'title1',
        'banner2',
        'title2',
        'TODAY_SPECIAL_OFFER',
        'banner_TODAY',
        'photo1',       
        'Download',      
        'photo_Download1',
        'url_video',
        'banner_testimonials',
    ];
}

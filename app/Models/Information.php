<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    protected $fillable = [
        'Facebook', 
        'Twitter',
        'linkedin',
        'instagram', 
        'address',
        'email1',
        'email2',
        'Mobile1', 
        'Mobile2', 
        'iframe_map',
        'OUR_CLIENTS',
        'YEARS_EXPERIENCE', 
        'FRESH_HALAL', 
        'TEAM_MEMBER', 
    ];
}

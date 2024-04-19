<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 
        'photo',
        'text', 
        'text2',
        'text3', 
        'FAQ1',
        'FAQ2', 
        'FAQ3',
        'FAQ4', 
        'FAQ5',
        'rep1', 
        'rep2',
        'rep3',
        'rep4', 
        'rep5',
    ];
}

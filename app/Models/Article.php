<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'text1',
        'text2',
        'text3',
        'photo1',
        'image',
        'photo3',
        'user_id',
        'category_id',
        'status',
    ];
    
    public function Category(){ 
        
        return $this->belongsTo(Category::class , 'category_id');

    }

    public function user(){ 
         
        return $this->belongsTo(User::class);

    }
}

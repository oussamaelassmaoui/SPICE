<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'photo',
    ];

    public function product(){
        return $this->hasMany(Product::class);
    }
    public function articles(){
        return $this->hasMany(Article::class);
    }

}

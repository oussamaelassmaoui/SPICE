<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_option extends Model
{
    use HasFactory;
    protected $table ='option_product';
    protected $fillable = [
        'product_id',
        'option_id',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'shipping_address',
        'total_cost',
        'telephone_number',
        'zip_code',
        'email',
        'first_name',
        'last_name',
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }


    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

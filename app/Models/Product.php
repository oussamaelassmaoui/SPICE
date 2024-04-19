<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";

    protected $fillable = [
        'name',
        'slug',
        'images',
        'price',
        'old_price',
        'photo',
        'quantity',
        'description',
        'category_id',
        // 'Shape',
    ];


    public function options()
    {
        return $this->belongsToMany(Option::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }
   

    public  function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
   

    public function Review()
    {
        return $this->hasMany(Review::class);
    }
  
    public function wishlistItems()
    {
        return $this->hasMany(wishlist::class);
    }
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
   
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}

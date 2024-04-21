<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;
    protected $table = 'visits'; 
    // Specify the table name if it's different from the model name

    protected $fillable = ['ip_address', 'user_agent', 'page_visited'];
     // Define the fillable fields
}

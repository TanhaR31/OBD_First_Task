<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'p_name', 'p_category', 'p_description', 'p_price', 'p_image'
    ];
}
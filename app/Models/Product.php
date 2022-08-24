<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'p_name', 'p_category', 'p_description', 'p_price', 'p_image'
    ];

    public function productBelongsToUser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id'); //user->id == product->user_id
    }

    public function productHasOneCategory()
    {
        return $this->hasOne(Category::class, 'ct_name', 'p_category'); //category->ct_name == product->p_category
    }
}
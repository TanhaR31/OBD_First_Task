<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'ct_name'
    ];

    public function categoryHasManyProduct()
    {
        $this->hasMany(Product::class, 'p_category', 'ct_name'); //category->ct_name == product->p_category
    }
}
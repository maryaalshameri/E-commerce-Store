<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{     use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'on_sale',
        'image',
        'category_id',
    ];

    // العلاقة مع Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }



    
}


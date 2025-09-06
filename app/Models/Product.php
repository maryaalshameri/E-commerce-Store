<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'category_id','name','description','price','on_sale','image'
    ];

    protected $casts = [
        'on_sale' => 'boolean',
        'price'   => 'decimal:2',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['artist', 'title', 'price', 'image_path'];
    protected $attributes =
    ['image_path' => 'https://picsum.photos/1200/800', // this will set the image_path to the randomised image generator url when a new product is created
    ];
    protected $guarded = [];
    protected $casts = [
        'price' => 'float', // casts new products as a float typr 
    ];
    
public function ProductType()
{
    return $this->belongsTo('App\Models\ProductType', 'product_type_id', 'id');
}
    
}

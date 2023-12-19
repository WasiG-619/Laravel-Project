<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['artist', 'title', 'price', 'image_path'];
    protected $attributes =
    [
        'image_path' => 'https://picsum.photos/1200/800', // this will set the image_path to the required url when a new product is created
    ];
    protected $guarded = [];

    
}

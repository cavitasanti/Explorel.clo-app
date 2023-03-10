<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_description',
        'product_price',
        'product_color',
        'product_quantity',
        'product_size',
        'image_front',
        'image_back',
        'image_left',
        'image_right',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products_Details extends Model
{

    protected $fillable = [
        'products_id',
        'price',
        'qty',
        'image',
        'color',
    ];
}

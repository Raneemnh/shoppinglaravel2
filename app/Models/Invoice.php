<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'costumer_id',
        'products_id',
        'qty',
        'price',
        'total',
    ];
}

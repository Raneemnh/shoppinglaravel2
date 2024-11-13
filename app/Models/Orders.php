<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'products_id',
        'costumer_id',
        'status',
    ];
}

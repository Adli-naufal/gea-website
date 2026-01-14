<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'category',
        'price_per_gram',
        'source',
        'date'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    protected $fillable = [
        'title', 'description', 'price', 'thumb', 'series', 'saleDate', 'type'
    ];
}

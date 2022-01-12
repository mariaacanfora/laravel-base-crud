<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    protected $fillable = [
        'title', 'price', 'thumb', 'series', 'saleDate', 'type', 'description'
    ];
}

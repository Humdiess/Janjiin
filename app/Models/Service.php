<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'image',
        'description',
        'event_date',
        'price',
        'duration'
    ];
}

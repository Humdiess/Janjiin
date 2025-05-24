<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;

        protected $fillable = [
        'title',
        'image',
        'description',
        'author_id',
        'status',
        'address',
        'event_date',
        'slug',
    ];

    protected $casts = [
        'event_date' => 'date',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

}

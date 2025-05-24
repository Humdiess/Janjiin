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
        'city',
        'event_date',
        'event_time',
        'event_type',
        'price',
        'participant_limit',
        'participant_count',
        'slug',
        'total_revenue', // opsional, jika kamu simpan secara manual
    ];

    protected $casts = [
        'event_date' => 'date',
        'event_time' => 'datetime:H:i',
        'price' => 'decimal:2',
        'total_revenue' => 'decimal:2',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // Jika kamu ingin revenue dihitung otomatis, tanpa simpan ke database
    public function getTotalRevenueAttribute()
    {
        return $this->price * $this->participant_count;
    }
}

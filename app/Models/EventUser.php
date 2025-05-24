<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class EventUser extends Model
{
    /** @use HasFactory<\Database\Factories\EventUserFactory> */
    use HasFactory;

    public function users()
    {
    return $this->belongsToMany(User::class, 'event_users')->withTimestamps();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'image',
        'description',
        'hotel_facilities',
        'room_facilities',
        'landmark',
        'safety',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'email',
        'phone',
        'hotel',
        'room_id',
        'type',
        'check_in',
        'check_out',
        'cost',
    ];
}

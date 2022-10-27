<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationStatus extends Model
{
    const REJECTED = 1;
    const STARTED = 2;
    const COMPLETED = 3;

    protected $fillable = [
        'name',
    ];

    use HasFactory;
}

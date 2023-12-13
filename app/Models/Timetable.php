<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Timetable extends Model
{
    use HasFactory;
    protected $fillable = [
        'day', 
        'time',
        'tutor_id',
    ];
}

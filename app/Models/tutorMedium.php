<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutorMedium extends Model
{
    use HasFactory;

    protected $fillable = [
        'tutorMedium_id',
        'Medium'
    ];
}

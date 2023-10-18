<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutorMedium extends Model
{
    protected $table = 'tutor_mediums';

    use HasFactory;

    protected $fillable = [
        'tutorMedium_id',
        'tutorMedium'
    ];
}

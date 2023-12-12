<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'tutorFullName',
        'tutorEmail',
        'tutorPhoneNumber',
        'qualification',
        'subject',
        'medium',
        'image',
        'tutor_id',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class TutorProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'tutor_id',
    ];

    public function tutorprofil()
    {
        return $this->belongsTo(tutorRegister::class, 'tutor_id');
    }
}

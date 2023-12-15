<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Tutordetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'tutorFullName',
        'tutorEmail',
        'tutorPhoneNumber',
        'qualification',
        'subject',
        'medium',
        'tutor_id',
    ];

    public function detail()
    {
        return $this->belongsTo(tutorRegister::class, 'tutor_id');
    }
}

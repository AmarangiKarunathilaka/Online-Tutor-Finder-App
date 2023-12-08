<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class tutorRegister extends Authenticatable
{
    protected $table = 'tutor_registers';

    use HasFactory;

    protected $fillable = [
        'tutorFullName',
        'tutorPhoneNumber',
        'qualification',
        'tutorEmail',
        'password',
        'tutorConfirmPassword'
    ];

    /*public function tutorMedium()
    {
        return $this->belongsTo(tutorMedium::class);
    }

    public function tutorSubject()
    {
        return $this->belongsTo(tutorSubject::class);
    }*/
}
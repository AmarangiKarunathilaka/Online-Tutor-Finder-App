<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutorRegister extends Model
{
    protected $table = 'tutor_registers';

    use HasFactory;

    protected $fillable = [
        'tutorFullName',
        'tutorPhoneNumber',
        'qualification',
        'tutorEmail',
        'tutorPassword',
        'tutorConfirmPassword'
    ];
}

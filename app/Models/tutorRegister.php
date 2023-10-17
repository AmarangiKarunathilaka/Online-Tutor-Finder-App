<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutorRegister extends Model
{
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

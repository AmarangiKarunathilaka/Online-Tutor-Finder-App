<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class studentRegister extends Authenticatable
{
    protected $table = 'student_registers';

    use HasFactory;

    protected $fillable = [
        'studentFullName',
        'birthday',
        'address',
        'studentPhoneNumber',
        'studentEmail',
        'password',
        'studentConfirmPassword'
    ];
}

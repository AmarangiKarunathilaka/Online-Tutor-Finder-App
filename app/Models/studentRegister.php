<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class studentRegister extends Authenticatable
{
    protected $table = 'student_registers';
    protected $primarykey = 'id'; 

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

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}

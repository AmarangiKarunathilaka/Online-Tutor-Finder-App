<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class AdminRegister extends Authenticatable
{
    use HasFactory;

    protected $table = 'admin_registers';

    protected $fillable = [
        'adminName',
        'email',
        'password',
    ];
}

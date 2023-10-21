<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'StudentFullName',
        'PhoneNumber',
        'address',
        'Email',
        'Password',
        'ConfirmPassword'
    ];
}

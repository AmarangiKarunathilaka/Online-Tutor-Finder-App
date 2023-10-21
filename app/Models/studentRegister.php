<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentRegister extends Model
{
    protected $table = 'student_registers';

    use HasFactory;

    protected $fillable = [
        'studentFullName',
        'birthday',
        'address',
        'studentPhoneNumber',
        'studentEmail',
        'studentPassword',
        'studentConfirmPassword'
    ];
}

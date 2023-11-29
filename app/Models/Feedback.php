<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'rating',
        'message',
        'student_id',     
    ];

}
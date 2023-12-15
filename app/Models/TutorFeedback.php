<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorFeedback extends Model
{
    protected $table = 'tutor_feedback';
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'tutor',
        'rating',        
        'message',
        'student_id',     
    ];
    

}
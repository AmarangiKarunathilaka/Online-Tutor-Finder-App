<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteFeedback extends Model
{
    protected $table = 'website_feedback';
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'rating',       
        'message',
        'student_id',     
    ];

}
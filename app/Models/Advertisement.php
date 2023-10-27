<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Advertisement extends Model
{
    protected $fillable = [
        'tutorName', 
        'email',
        'imageUpload',
        'payment',
        'description',
        'subject',
        'status',
        'tutor_id',
        
    ];

   
}

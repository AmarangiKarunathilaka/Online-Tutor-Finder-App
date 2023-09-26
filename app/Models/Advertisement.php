<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable = [
        'tutorName', // Add other attributes here as needed
        'description',
        'imageUpload',
        'status',
        'subject',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Advertisement extends Model
{
    use HasFactory;
    protected $table = 'advertisements';
    protected $primarykey = 'id'; 
    protected $fillable = [
        'tutorName', 
        'email',
        //'imageUpload',
        'photo',
        'payment',
        'description',
        'subject',
        'medium',
        'status',
        'tutor_id',
        
    ];

    public function tutor()
    {
        return $this->belongsTo(tutorRegister::class);
    }

    public function timetable()
    {
        return $this->hasOne(Timetable::class, 'tutor_id', 'tutor_id');
    }
   
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutorSubject extends Model
{
    protected $table = 'tutor_subjects';

    use HasFactory;

    protected $fillable = [
        'tutorSubject_id',
        'tutorSubject'
    ];

    public function tutortimetable()
    {
        return $this->hasMany(Timetable::class, 'tutor_id');
    }
}

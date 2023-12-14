<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password'
    ];

    public function timetable()
    {
        return $this->hasOne(Timetables::class, 'tutor_id', 'id');
    }
}

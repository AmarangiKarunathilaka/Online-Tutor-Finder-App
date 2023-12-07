<?php

// app/Models/Class.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRequest extends Model
{
    use HasFactory;

    protected $fillable = ['keydate', 'time', 'subject', 'medium', 'student_id', 'student_name', 'tutor_id', 'tutor_name', 'status'];

    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}


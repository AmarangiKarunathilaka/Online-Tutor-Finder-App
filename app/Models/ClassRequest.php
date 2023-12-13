<?php

// app/Models/Class.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRequest extends Model
{

    protected $table = 'class_requests';
    use HasFactory;
    protected $fillable = ['tutor_id', 'tutor_name','student_id', 'student_name','keydate', 'time', 'subject', 'medium', ];

    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}


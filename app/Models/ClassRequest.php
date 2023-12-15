<?php

// app/Models/Class.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRequest extends Model
{
    protected $table = 'class_requests';
    use HasFactory;
    protected $fillable = [ 'tutorFullName','subject', 'medium','day', 'time', 'tutor_id', ];

    public function classrequest()
    {
        return $this->belongsTo(tutorRegister::class, 'tutor_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}


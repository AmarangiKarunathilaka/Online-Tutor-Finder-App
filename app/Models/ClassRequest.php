<?php

// app/Models/Class.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRequest extends Model
{
    protected $table = 'class_requests';
    use HasFactory;
    protected $fillable = ['studentName', 'tutorFullName','subject', 'medium','day', 'time', 'tutor_id','student_id' ,];

    public function classrequest()
    {
        return $this->belongsTo(tutorRegister::class, 'tutor_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function mediumsrequest()
    {
        return $this->belongsTo(tutorMedium::class, 'tutorMedium_id');
    
    }

    public function classreq()
    {
        return $this->belongsTo(Advertisement::class);
    }

}


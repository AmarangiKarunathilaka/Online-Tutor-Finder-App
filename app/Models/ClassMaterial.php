<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ClassMaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'tutorName',
        'email',
        'subject',
        'title',
        'lecNote',
        'file',
        'tutor_id',
        'status',
    ];

    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }
}



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

    public function tutor()
{
    return $this->hasMany(tutorRegister::class);
}
}

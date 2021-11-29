<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // kalo pake insert data lewat create harus tulisin ini
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $fillable = [
        'id', 'nama', 'alamat','nik', 'jenis', 'pendidikan', 'jurusan', 'hari'
    ];
}

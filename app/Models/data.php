<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $fillable = [
        'id', 'nama_lengkap', 'alamat_domisili', 'jenis_kelamin', 'pendidikan_terakhir', 'jurusan', 'tanggal_pengesahan'
    ];
}

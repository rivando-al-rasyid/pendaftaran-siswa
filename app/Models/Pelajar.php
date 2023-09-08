<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelajar extends Model
{
    protected $fillable = [
        'nama',
        'nomor_telepon',
        'agama',
        'tanggal_lahir',
        'tempat_lahir',
        'sekolah_sekarang',
        'alamat',
        'jenis_kelamin',
        'nisn',
    ];
}

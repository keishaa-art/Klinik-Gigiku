<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';
    protected $primaryKey = 'nik';
    public $incrementing = false; 
    protected $keyType = 'string';

    protected $fillable = [
        'nik',
        'no_telepon',
        'nama_pasien',
        'tgl_lahir',
        'jenis_kelamin',
        'cara_bayar',
    ];

    public $timestamps = false;
}

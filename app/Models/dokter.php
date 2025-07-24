<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class dokter extends Model
{
    use HasFactory;

    protected $table = 'dokters';
    protected $fillable = [
        'nip',
        'nama',
        'spesialis',
        'no_hp',
        'email',
        'alamat',
    ];
}

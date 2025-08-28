<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class dokter extends Model
{
    use HasFactory;

    protected $table = 'dokters';
    protected $fillable = [
        'user_id',
        'nip',
        'spesialis',
        'tgl_lahir',
        'jenis_kelamin',
        'no_telepon',
        'alamat'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

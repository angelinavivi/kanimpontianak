<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemohon extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama',
        'NIK',
        'tanggal_lahir',
        'tempat_lahir',
        'Agama',
        'Jenis_Kelamin',
        'Alamat',
    ];

    public function paspor()
    {
        return $this->hasOne(Paspor::class, 'id_pemohons');
    }
}

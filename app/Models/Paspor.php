<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paspor extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pemohons',
        'no_arsip',
        'no_paspor',
        'tgl_pembuatan',
        'tgl_habis',
        'foto_paspor',
        'foto_ktp',
        'foto_kk',
        'foto_akte',
    ];

    public function pemohon(){
        return $this->belongsTo(Pemohon::class, 'id_pemohons');
    }
}

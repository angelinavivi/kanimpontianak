<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_users',
        'Nama',
        'NIP',
        'Jabatan',
        'Tempat_Lahir',
        'Tanggal_Lahir',
        'Agama',
        'Jenis_Kelamin',
        'Alamat',
        'No_HP',
        'email',
        'profil',
        'role',

    ];

    public $appends = ['foto_profil'];

    public function user(){
        return $this->belongsTo(User::class,'id_users');
    }

    public static function countStaf()
    {
        return self::where('role', 'staff')->count();
    }

    public function getFotoProfilAttribute()
    {
        return ($this->profil) ? url('/') . "/storage/profil/{$this->profil}" : null;
    }
}

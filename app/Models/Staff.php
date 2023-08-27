<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $fillable = ["Nama","NIP","Jabatan","Tempat_Lahir","Tanggal_Lahir","Agama", "Jenis_kelamin","Alamat","No_HP","email"];
    protected $table = "staffs";
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('karyawans')->insert([
            [
                'id_users' => '1',
                'Nama'=>'Saya',
                'NIP'=> '12334424',
                'Jabatan'=>'Ketua',
                'Tempat_Lahir'=> 'Bumi',
                'Tanggal_lahir'=>'2012-07-12',
                'Agama'=> 'Islam',
                'Jenis_Kelamin'=>'Laki-Laki',
                'Alamat'=> 'Siantan',
                'No_HP'=>'07236482364',
                'email'=> 'email',
                'profil'=>'Saya',
                'role'=> 'staff',
                'created_at' => now(),
                'updated_at' =>now(),
            ]
        ]);
    }
}

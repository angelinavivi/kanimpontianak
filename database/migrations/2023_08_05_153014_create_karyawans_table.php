<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_users')->constrained('users');
            $table->string('Nama');
            $table->string('NIP')->unique();
            $table->string('Jabatan');
            $table->string('Tempat_Lahir');
            $table->date('Tanggal_Lahir');
            $table->enum('Agama', ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']);
            $table->enum('Jenis_Kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('Alamat');
            $table->string('No_HP');
            $table->string('email');
            $table->string('profil');
            $table->enum('role', ['admin','staff']);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};

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
        Schema::create('paspors', function (Blueprint $table) {
            $table->id();
            $table->string('no_paspor')->unique();
            $table->foreignId('id_pemohons')->constrained('pemohons');
            $table->date('tgl_pembuatan');
            $table->date('tgl_habis');
            $table->String('no_arsip');
            $table->String('foto_paspor');
            $table->String('foto_ktp');
            $table->String('foto_kk');
            $table->String('foto_akte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paspors');
    }
};

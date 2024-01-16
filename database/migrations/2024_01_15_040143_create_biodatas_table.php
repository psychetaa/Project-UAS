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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('NAMA_ASAL_SEKOLAH');
            $table->enum('JENIS_SEKOLAH',['SMK','MA','SMA']);
            $table->enum('JURUSAN_SEKOLAH',['TKJ','MULTIMEDIA','REKAYASA PERANGKAT LUNAK','AKUTANSI','PERKANTORAN','IPA','IPS','AGAMA']);
            $table->string('KOTA_SEKOLAH');
            $table->string('JUMLAH_NILAI_UAN_SEKOLAH_RAPORT_TERAKHIR_SMT_SEBELUMNYA');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};

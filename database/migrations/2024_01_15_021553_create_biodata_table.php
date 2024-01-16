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
        Schema::create('biodata', function (Blueprint $table) {
            $table->id();
            $table->string('NAMA ASAL SEKOLAH');
            $table->enum('JENIS SEKOLAH',['SMK','MA','SMA']);
            $table->enum('JURUSAN SEKOLAH',['TKJ','MULTIMEDIA','REKAYASA PERANGKAT LUNAK','AKUTANSI','PERKANTORAN','IPA','IPS','AGAMA']);
            $table->string('KOTA SEKOLAH');
            $table->string('JUMLAH NILAI UAN SEKOLAH/RAPORT TERAKHIR SMT SEBELUMNYA');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodata');
    }
};

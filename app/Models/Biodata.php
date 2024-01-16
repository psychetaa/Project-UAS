<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'NAMA_ASAL_SEKOLAH',
    'JENIS_SEKOLAH',
    'JURUSAN_SEKOLAH',
    'KOTA_SEKOLAH',
    'JUMLAH_NILAI_UAN_SEKOLAH_RAPORT_TERAKHIR_SMT_SEBELUMNYA',
    ];
    
    public function lecturer()
    {
        return $this->belongsTo(Biodata::class);
    }
}

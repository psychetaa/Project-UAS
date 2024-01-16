<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Biodata>
 */
class BiodataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'NAMA_ASAL_SEKOLAH'=>$this->faker->text(),
            'JENIS_SEKOLAH'=> $this->faker->randomElement(['SMK','MA','SMA']),
            'JURUSAN_SEKOLAH'=> $this->faker->randomElement(['TKJ','MULTIMEDIA','REKAYASA PERANGKAT LUNAK','AKUTANSI','PERKANTORAN','IPA','IPS','AGAMA']),
            'KOTA_SEKOLAH'=> $this->faker->city(),
            'JUMLAH_NILAI_UAN_SEKOLAH_RAPORT_TERAKHIR_SMT_SEBELUMNYA'=> $this->faker->numberBetween(60, 100),
            
        ];
    }
}

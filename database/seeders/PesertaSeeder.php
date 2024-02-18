<?php

namespace Database\Seeders;

use App\Models\Peserta;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i < 5; $i++) {
            Peserta::create([
                'nama' => "Peserta " . $i,
                'nama_pendamping' => "Pendamping " . $i,
                'no_wa' => "123" . $i,
                'email' => $i . "@gmail.com",
                'nama_md' => "nehru"
            ]);
        }
    }
}

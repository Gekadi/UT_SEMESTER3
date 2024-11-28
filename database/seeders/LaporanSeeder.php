<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('laporan')->insert([
            ['kode_barang' => 'BR001', 'nama_barang' => 'TV Samsung', 'kategori_id' => 1, 'tanggal' => '2024-11-01', 'jumlah' => 2],
            ['kode_barang' => 'BR002', 'nama_barang' => 'Kulkas LG', 'kategori_id' => 2, 'tanggal' => '2024-11-02', 'jumlah' => 1],
        ]);
    }
}

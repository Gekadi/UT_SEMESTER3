<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('barang')->insert([
            ['kode' => 'BR001', 'nama' => 'TV Samsung', 'kategori_id' => 1, 'harga' => 5000000, 'stok' => 10],
            ['kode' => 'BR002', 'nama' => 'Kulkas LG', 'kategori_id' => 2, 'harga' => 3000000, 'stok' => 5],
        ]);
    }
}

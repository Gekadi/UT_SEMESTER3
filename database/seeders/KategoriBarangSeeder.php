<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriBarangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kategori_barang')->insert([
            ['nama' => 'Elektronik'],
            ['nama' => 'Peralatan Rumah Tangga'],
        ]);
    }
}

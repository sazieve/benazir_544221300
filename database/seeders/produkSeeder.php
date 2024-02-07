<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert([
            ['nama_produk' => 'Pandora Sun&Moon rings', 'harga_jual' => 9500000, 'harga_beli' => 9200000],
            ['nama_produk' => 'Rare Beauty Blush', 'harga_jual' => 450000, 'harga_beli' => 430000]

       ] );

    }
}

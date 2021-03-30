<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'id' => 1,
                'kode_barang' => 'c1000',
                'nama_barang' => 'Marjan',
                'kategori_barang' =>'Minuman',
                'harga' =>"24000",
                'qty' =>"79",
            ],
        );
        DB::table('Barangs')->insert($data);
    }
}

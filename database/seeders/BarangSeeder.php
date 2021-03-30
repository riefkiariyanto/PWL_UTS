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
                'id_barang' => 1,
                'kode_barang' => 'c1000',
                'nama_barang' => 'Marjan',
                'kategori_barang' =>'Minuman',
                'harga' =>"24000",
                'qty' =>"79",
            ],
            [
                'id_barang' => 2,
                'kode_barang' => 'c1001',
                'nama_barang' => 'Tanggo',
                'kategori_barang' =>'Snack',
                'harga' =>"22000",
                'qty' =>"666",
            ],
            [
                'id_barang' => 3,
                'kode_barang' => 'c1021',
                'nama_barang' => 'Oreo',
                'kategori_barang' =>'Snack',
                'harga' =>"12000",
                'qty' =>"666",
            ],
            [
                'id_barang' => 4,
                'kode_barang' => 'c1098',
                'nama_barang' => 'Nutrisari',
                'kategori_barang' =>'Minuman',
                'harga' =>"24000",
                'qty' =>"87",
            ],
            [
                'id_barangd' => 5,
                'kode_barang' => 'c1023',
                'nama_barang' => 'Cocacola',
                'kategori_barang' =>'Minuman',
                'harga' =>"14200",
                'qty' =>"23",
            ],
            [
                'id_barang' => 6,
                'kode_barang' => 'c1333',
                'nama_barang' => 'Indomie',
                'kategori_barang' =>'Makanan',
                'harga' =>"2500",
                'qty' =>"88",
            ],
            [
                'id_barang' => 7,
                'kode_barang' => 'c1043',
                'nama_barang' => 'Sarimie',
                'kategori_barang' =>'makanan',
                'harga' =>"2200",
                'qty' =>"84",
            ],
            [
                'id_barang' => 8,
                'kode_barang' => 'c1211',
                'nama_barang' => 'Pisau',
                'kategori_barang' =>'alat',
                'harga' =>"14000",
                'qty' =>"79",
            ],
            [
                'id_barang' => 9,
                'kode_barang' => 'c1031',
                'nama_barang' => 'Sendok',
                'kategori_barang' =>'alat',
                'harga' =>"27000",
                'qty' =>"43",
            ],
            [
                'id_barang' => 10,
                'kode_barang' => 'c1344',
                'nama_barang' => 'Sariroti',
                'kategori_barang' =>'Makanan',
                'harga' =>"10000",
                'qty' =>"10",
            ],
            [
                'id_barang' => 11,
                'kode_barang' => 'c1035',
                'nama_barang' => 'Pocaris',
                'kategori_barang' =>'Minuman',
                'harga' =>"8000",
                'qty' =>"34",
            ],
            [
                'id_barang' => 12,
                'kode_barang' => 'c1055',
                'nama_barang' => 'Yacult',
                'kategori_barang' =>'Minuman',
                'harga' =>"10000",
                'qty' =>"13",
            ],
            [
                'id_barang' => 13,
                'kode_barang' => 'c1043',
                'nama_barang' => 'Chitato',
                'kategori_barang' =>'Snack',
                'harga' =>"3000",
                'qty' =>"41",
            ],
            [
                'id_barang' => 14,
                'kode_barang' => 'c1340',
                'nama_barang' => 'Pepsi',
                'kategori_barang' =>'Minuman',
                'harga' =>"11000",
                'qty' =>"20",
            ],
            [
                'id_barang' => 15,
                'kode_barang' => 'c1450',
                'nama_barang' => 'Beng beng',
                'kategori_barang' =>'Scnak',
                'harga' =>"4000",
                'qty' =>"42",
            ],
            [
                'id_barang' => 16,
                'kode_barang' => 'c1120',
                'nama_barang' => 'Cheetos',
                'kategori_barang' =>'Snack',
                'harga' =>"3000",
                'qty' =>"39",
            ],
            [
                'id_barang' => 17,
                'kode_barang' => 'c1011',
                'nama_barang' => 'gunting',
                'kategori_barang' =>'Alat',
                'harga' =>"13000",
                'qty' =>"14",
            ],
            [
                'id_barang' => 18,
                'kode_barang' => 'c1032',
                'nama_barang' => 'garpu',
                'kategori_barang' =>'Alat',
                'harga' =>"18000",
                'qty' =>"19",
            ],
            [
                'id_barang' => 19,
                'kode_barang' => 'c1030',
                'nama_barang' => 'sumpit',
                'kategori_barang' =>'Alat',
                'harga' =>"10000",
                'qty' =>"11",
            ],
            [
                'id_barang' => 20,
                'kode_barang' => 'c1666',
                'nama_barang' => 'Popmie',
                'kategori_barang' =>'Makanan',
                'harga' =>"6000",
                'qty' =>"49",
            ],
        );
        DB::table('Barangs')->insert($data);
    }
}

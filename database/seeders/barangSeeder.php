<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang =[
            ['nama'=>'dani','varian'=>'m3pro','harga_beli'=>1500000,'harga_jual'=>2000000],
            ['nama'=>'dina','varian'=>'f3','harga_beli'=>3500000,'harga_jual'=>2900000],
            ['nama'=>'usep','varian'=>'c3','harga_beli'=>1700000,'harga_jual'=>14000000],
            ['nama'=>'atang','varian'=>'xr','harga_beli'=>8000000,'harga_jual'=>4000000],
            ['nama'=>'firman','varian'=>'c2','harga_beli'=>1500000,'harga_jual'=>1000000]
        ];
        DB::table('barang')->insert($barang);
    }
}

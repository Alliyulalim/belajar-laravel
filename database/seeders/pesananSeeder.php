<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan =[
            ['nama_pelanggan'=>'udin','nama_barang'=>'pintu','qty'=>100,'tgl_pesan'=>'2010-01-10'],
            ['nama_pelanggan'=>'utep','nama_barang'=>'kursi','qty'=>120,'tgl_pesan'=>'2011-02-11'],
            ['nama_pelanggan'=>'ujang','nama_barang'=>'kasur','qty'=>75,'tgl_pesan'=>'2012-03-12'],
            ['nama_pelanggan'=>'panji','nama_barang'=>'sofa','qty'=>55,'tgl_pesan'=>'2013-04-13'],
            ['nama_pelanggan'=>'windi','nama_barang'=>'mouse','qty'=>60,'tgl_pesan'=>'2014-05-14']
        ];
        DB::table('pesanan')->insert($pesanan);
    }
}

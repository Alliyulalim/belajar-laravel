<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian =[
            ['nama_barang'=>'baju','nama_suplier'=>'brody','qty'=>100,'tgl'=>'2010-01-10'],
            ['nama_barang'=>'dompet','nama_suplier'=>'Ruby','qty'=>120,'tgl'=>'2011-02-11'],
            ['nama_barang'=>'Tas','nama_suplier'=>'wawan','qty'=>75,'tgl'=>'2012-03-12'],
            ['nama_barang'=>'laptop','nama_suplier'=>'chelos','qty'=>55,'tgl'=>'2013-04-13'],
            ['nama_barang'=>'papan tulis','nama_suplier'=>'mutadi','qty'=>60,'tgl'=>'2014-05-14']
        ];
        DB::table('pembelian')->insert($pembelian);
    }
}

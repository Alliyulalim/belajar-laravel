<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli =[
            ['nama'=>'pandi','jns_kelamin'=>'laki-laki','alamat'=>'Bojong soang','kode_pos'=>20109,'kota'=>'Bandung','tgl_lahir'=>'2000-01-11'],
            ['nama'=>'ucup','jns_kelamin'=>'laki-laki','alamat'=>'Cicaheum','kode_pos'=>20110,'kota'=>'Bandung','tgl_lahir'=>'2001-02-12'],
            ['nama'=>'ulan','jns_kelamin'=>'perempuan','alamat'=>'Rancamanyar','kode_pos'=>20120,'kota'=>'Bandung','tgl_lahir'=>'2002-03-13'],
            ['nama'=>'panjul','jns_kelamin'=>'laki-laki','alamat'=>'Cibaduyut','kode_pos'=>20130,'kota'=>'Bandung','tgl_lahir'=>'2003-04-14'],
            ['nama'=>'windi','jns_kelamin'=>'perempuan','alamat'=>'Kp sindangpalay','kode_pos'=>20140,'kota'=>'Bandung','tgl_lahir'=>'2004-05-15']
        ];
        DB::table('pembeli')->insert($pembeli);
    }
}

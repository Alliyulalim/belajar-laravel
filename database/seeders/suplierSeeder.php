<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class suplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier =[
            ['nama'=>'fadlan','alamat'=>'kp stugunting','kode_pos'=>20101,'kota'=>'Bandung'],
            ['nama'=>'ripal','alamat'=>'Kp sindang palay','kode_pos'=>20102,'kota'=>'Bandung'],
            ['nama'=>'afza','alamat'=>'kp cilisung','kode_pos'=>21319,'kota'=>'Bandung'],
            ['nama'=>'restu','alamat'=>'Kp sayuran','kode_pos'=>51272,'kota'=>'Bandung'],
            ['nama'=>'siti','alamat'=>'cibeber','kode_pos'=>60098,'kota'=>'Bandung']
        ];
        DB::table('suplier')->insert($suplier);
    }
}

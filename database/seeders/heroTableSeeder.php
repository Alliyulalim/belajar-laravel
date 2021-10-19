<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class heroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hero = [
            ['realname'=>'captain amerika','heroname'=>'steve roger','power'=>'kecerdasan','kindofpower'=>'kekuatanfisik','gender'=>'laki-laki','height'=>'172','weight'=>'79','borndate'=>'1918-04-04'],
            ['realname'=>'winter soldier','heroname'=>'bucky barnes','power'=>'tanganbesi','kindofpower'=>'kekuatantangan','gender'=>'laki-laki','height'=>'170','weight'=>'75','borndate'=>'1918-02-22'],
            ['realname'=>'wonder women','heroname'=>'princess diana','power'=>'kecerdasan','kindofpower'=>'kekuatanfisik','gender'=>'perempuan','height'=>'169','weight'=>'60','borndate'=>'1942-01-21'],
            ['realname'=>'black panter','heroname'=>'tachala','power'=>'kelincahan','kindofpower'=>'kekuatanmagis','gender'=>'laki-laki','height'=>'172','weight'=>'77','borndate'=>'1969-04-08'],
            ['realname'=>'wolverin','heroname'=>'logan','power'=>'tulangkuat','kindofpower'=>'kekuatanfisik','gender'=>'laki-laki','height'=>'171','weight'=>'80','borndate'=>'1918-09-05'],
            ['realname'=>'Batman','heroname'=>'bruce wine','power'=>'kecerdasan','kindofpower'=>'kekuatanfisik','gender'=>'laki-laki','height'=>'172','weight'=>'79','borndate'=>'1918-10-06'],
            ['realname'=>'superman','heroname'=>'clark','power'=>'segalaelmen','kindofpower'=>'kekuatanfisik','gender'=>'laki-laki','height'=>'172','weight'=>'79','borndate'=>'1981-11-02'],
            ['realname'=>'Hulk','heroname'=>'bruce banner','power'=>'regenerasi','kindofpower'=>'kekuatanfisik','gender'=>'laki-laki','height'=>'171','weight'=>'79','borndate'=>'1918-12-11'],
            ['realname'=>'spider-man','heroname'=>'piterparker','power'=>'kecekatan','kindofpower'=>'jaring','gender'=>'laki-laki','height'=>'170','weight'=>'79','borndate'=>'1919-03-09'],
            ['realname'=>'falcon','heroname'=>'falcon','power'=>'pintar','kindofpower'=>'teknologi','gender'=>'laki-laki','height'=>'169','weight'=>'79','borndate'=>'1918-04-10']
            ];

            DB::table('hero')->insert($hero);       
    }
    
}

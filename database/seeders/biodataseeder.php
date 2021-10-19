<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class biodataseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $bio =[
        ['name'=>'alliyul','gender'=>'male','borndate'=>'2003-12-11','weight'=>57,'height'=>169]
    ];
    DB::table('biodatas')->insert($bio);
    }
}

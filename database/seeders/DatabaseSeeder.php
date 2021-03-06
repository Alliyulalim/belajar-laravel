<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(barangSeeder::class);
        $this->call(pembelianSeeder::class);
        $this->call(pesananSeeder::class);
        $this->call(pembeliSeeder::class);
        $this->call(suplierSeeder::class);

    }
}

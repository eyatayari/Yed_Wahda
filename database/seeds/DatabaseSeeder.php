<?php

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
        $this->call(BenevoleSeeder::class);
        $this->call(GouvernoratsSeeder::class);
        $this->call(MunicipalitesSeeder::class);
        //$this->call(GouvernoratsSeeder::class);
        //$this->call(MunicipalitesSeeder::class);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BenevoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('benevoles')->insert([
            'cin'=>'10856487',
            'nom'=>"jihench",
            'prenom'=>'chaieb',
            'municipalite'=>'liberté',
            'gouvernorat'=>'zaghouwan',
            'num_telephone'=>21564875,
            'sexe'=>'femme',
            'isdoctor'=>true,
            'email'=>"jihen@ch.fr",
            'password' => bcrypt('12345678')
    ]);
        DB::table('quarantaines')->insert([
            'cin'=>'10856487',
            'nom'=>"jihench",
            'prenom'=>'chaieb',
            'municipalite'=>'liberté',
            'gouvernorat'=>'zaghouwan',
            'num_telephone'=>21564875,
            'sexe'=>'femme',
            'email'=>"eyaQ@ch.fr",
            'password' => bcrypt('12345678')
        ]);
    }
}

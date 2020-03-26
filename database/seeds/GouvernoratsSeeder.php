<?php

use App\Gouvernorat;
use Illuminate\Database\Seeder;

class GouvernoratsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gouvernorat::create( [
            'id'=>1,
            'nom_gouvernorat'=>'Ariana',
            'nbr_municipalite'=>7,
        ] );

        Gouvernorat::create( [
            'id'=>2,
            'nom_gouvernorat'=>'Béja',
            'nbr_municipalite'=>12,            
        ] );

        Gouvernorat::create( [
            'id'=>3,
            'nom_gouvernorat'=>'Ben Arous',
            'nbr_municipalite'=>13,            
        ] );

        Gouvernorat::create( [
            'id'=>4,
            'nom_gouvernorat'=>'Bizerte',
            'nbr_municipalite'=>17,            
        ] );

        Gouvernorat::create( [
            'id'=>5,
            'nom_gouvernorat'=>'Gabès',
            'nbr_municipalite'=>16,            
        ] );

        Gouvernorat::create( [
            'id'=>6,
            'nom_gouvernorat'=>'Gafsa',
            'nbr_municipalite'=>13,            
        ] );

        Gouvernorat::create( [
            'id'=>7,
            'nom_gouvernorat'=>'Jendouba',
            'nbr_municipalite'=>14,            
        ] );

        Gouvernorat::create( [
            'id'=>8,
            'nom_gouvernorat'=>'Kairouan',
            'nbr_municipalite'=>19,            
        ] );

        Gouvernorat::create( [
            'id'=>9,
            'nom_gouvernorat'=>'Kasserine',
            'nbr_municipalite'=>19,            
        ] );

        Gouvernorat::create( [
            'id'=>10,
            'nom_gouvernorat'=>'Kébili',
            'nbr_municipalite'=>8,            
        ] );

        Gouvernorat::create( [
            'id'=>11,
            'nom_gouvernorat'=>'Le Kef',
            'nbr_municipalite'=>15,            
        ] );

        Gouvernorat::create( [
            'id'=>12,
            'nom_gouvernorat'=>'Mahdia',
            'nbr_municipalite'=>18,            
        ] );

        Gouvernorat::create( [
            'id'=>13,
            'nom_gouvernorat'=>'La Manouba',
            'nbr_municipalite'=>10,            
        ] );

        Gouvernorat::create( [
            'id'=>14,
            'nom_gouvernorat'=>'Médenine',
            'nbr_municipalite'=>10,            
        ] );

        Gouvernorat::create( [
            'id'=>15,
            'nom_gouvernorat'=>'Monastir',
            'nbr_municipalite'=>30,            
        ] );

        Gouvernorat::create( [
            'id'=>16,
            'nom_gouvernorat'=>'Nabeul',
            'nbr_municipalite'=>28,            
        ] );

        Gouvernorat::create( [
            'id'=>17,
            'nom_gouvernorat'=>'Sfax',
            'nbr_municipalite'=>19,            
        ] );

        Gouvernorat::create( [
            'id'=>18,
            'nom_gouvernorat'=>'Sidi Bouzid',
            'nbr_municipalite'=>17,            
        ] );

        Gouvernorat::create( [
            'id'=>19,
            'nom_gouvernorat'=>'Siliana',
            'nbr_municipalite'=>12,            
        ] );

        Gouvernorat::create( [
            'id'=>20,
            'nom_gouvernorat'=>'Sousse',
            'nbr_municipalite'=>18,            
        ] );

        Gouvernorat::create( [
            'id'=>21,
            'nom_gouvernorat'=>'Tataouine',
            'nbr_municipalite'=>7,            
        ] );

        Gouvernorat::create( [
            'id'=>22,
            'nom_gouvernorat'=>'Tozeur',
            'nbr_municipalite'=>6,            
        ] );

        Gouvernorat::create( [
            'id'=>23,
            'nom_gouvernorat'=>'Tunis',
            'nbr_municipalite'=>8,            
        ] );

        Gouvernorat::create( [
            'id'=>24,
            'nom_gouvernorat'=>'Zaghouan',
            'nbr_municipalite'=>8,            
        ] );
    }
}

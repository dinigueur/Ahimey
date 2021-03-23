<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
            	'name' => 'Vêtements & Modes'
            ],
            [
            	'name' => 'Consommables Informatique & Réseau'
            ],
            
            [
            	'name' => 'Produits Alimentaires'
            ],
            [
            	'name' => 'Véhicules'
            ],
            [
            	'name' => 'Produits Cosmétiques'
            ],
            [
            	'name' => 'Produits Agricoles'
            ],
            [
            	'name' => 'Matériels Constructions'
            ],
            [
            	'name' => 'Electrique'
            ],
            [
            	'name' => 'ElectroMénagère'
            ],
            [
                'name' => 'Matériels Musiques'
            ],
            [
            	'name' => 'Bijoux & Objet d\'Art'
            ],
            [
            	'name' => 'Habitation & Immeubles'
            ],
            [
            	'name' => 'Electronique'
            ], 
            [
                'name' => 'Commerce Général'
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
            	'name' => 'Vêtement',  
            	'category_id' => 1,  
            ],
            [
            	'name' => 'Chaussure',  
            	'category_id' => 1,  
            ],
            [
            	'name' => 'Ordinateur',  
            	'category_id' => 2,  
            ],
            [
            	'name' => 'Antenne parabolique',  
            	'category_id' => 2,  
            ],
            [
            	'name' => 'Imprimente',  
            	'category_id' => 2,  
            ],
            [
            	'name' => 'Téléphone',  
            	'category_id' => 2,  
            ],
            [
            	'name' => 'Tubercule',  
            	'category_id' => 3,  
            ],
            [
            	'name' => 'Légume',  
            	'category_id' => 3,  
            ],
            [
            	'name' => 'Produits laitier',  
            	'category_id' => 3,  
            ],
            [
            	'name' => 'Poisson',  
            	'category_id' => 3,  
            ],
            [
            	'name' => 'Voiture',  
            	'category_id' => 4,  
            ],
             [
                  'name' => 'Moto',  
                  'category_id' => 4,  
            ],
            [
            	'name' => 'Pièce de véhicule',  
            	'category_id' => 4,  
            ],
            [
            	'name' => 'Pommade',  
            	'category_id' => 5,  
            ],
            [
            	'name' => 'Savon',  
            	'category_id' => 5,  
            ],
            [
            	'name' => 'Huile',  
            	'category_id' => 5,  
            ],
            [
            	'name' => 'Céréale',  
            	'category_id' => 6,  
            ],
             [
                  'name' => 'Fruit',  
                  'category_id' => 6,  
            ],
            [
            	'name' => 'Ciment',  
            	'category_id' => 7,  
            ],
            [
            	'name' => 'Fer',  
            	'category_id' => 7,  
            ],
            [
            	'name' => 'Plomberie',  
            	'category_id' => 7,  
            ],
            [
            	'name' => 'Tôle',  
            	'category_id' => 7,  
            ],
            [
            	'name' => 'Ustensiles de cuisine',
	            'category_id' => 9,
            ],
            [
            	'name' => 'Gaz',
	            'category_id' => 9,
            ],
            [
            	'name' => 'Frigorifique',
	            'category_id' => 9,
            ],
            [
            	'name' => 'Haut-parleur',
	            'category_id' => 10,
            ],
            [
                  'name' => 'Rythmique',
                  'category_id' => 10,
            ],
            [
                  'name' => 'Acoustique',
                  'category_id' => 10,
            ],
            [
            	'name' => 'Collier',
	            'category_id' => 11,
            ],
            [
            	'name' => 'Bijoux',
	            'category_id' => 11,
            ],
            [
            	'name' => 'Lit',
	            'category_id' => 12,
            ],
            [
            	'name' => 'Salon & Table',
	            'category_id' => 12,
            ],
            [
            	'name' => 'Maison',
	            'category_id' => 12,
            ],
            [
            	'name' => 'Villa',
	            'category_id' => 12,
            ],
            [
            	'name' => 'Télévision',
	            'category_id' => 13,
            ],
            [
            	'name' => 'poste radio',
	            'category_id' => 13,
            ],
            [
            	'name' => 'Divers',
	            'category_id' => 14,
            ],
        ]);
    }
}

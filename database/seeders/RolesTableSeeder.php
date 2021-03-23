<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            
        	['label' => "Acheteur", 'code' => "RA"],
        	['label' => "Vendeur", 'code' => "RV"],
        	['label' => "Livreur", 'code' => "RL"],
            ['label' => "Commercial", 'code' => "RC"],
        	['label' => "Administrateur", 'code' => "RA"],
        	['label' => "Super Administrateur", 'code' => "RSA"]
        ]);
    }
}

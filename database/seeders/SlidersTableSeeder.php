<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
        	[
        		'name' => 'slider01',
        		'image' => !\App::environment('local') ? 'public' : ''.'storage/app-assets/images/slider/banner01.jpg',
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	],
        	[
        		'name' => 'slider02',
        		'image' => !\App::environment('local') ? 'public' : ''.'storage/app-assets/images/slider/banner02.jpg',
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	],
        	[
        		'name' => 'slider03',
        		'image' => !\App::environment('local') ? 'public' : ''.'storage/app-assets/images/slider/banner03.jpg',
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	],
        	[
        		'name' => 'slider04',
        		'image' => !\App::environment('local') ? 'public' : ''.'storage/app-assets/images/slider/banner04.jpg',
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	],
        	[
        		'name' => 'slider05',
        		'image' => !\App::environment('local') ? 'public' : ''.'storage/app-assets/images/slider/banner05.jpg',
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	],
        	[
        		'name' => 'slider06',
        		'image' => !\App::environment('local') ? 'public' : ''.'storage/app-assets/images/slider/banner06.jpg',
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	],
        	[
        		'name' => 'slider07',
        		'image' => !\App::environment('local') ? 'public' : ''.'storage/app-assets/images/slider/banner07.jpg',
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	],
            [
                'name' => 'slider08',
                'image' => !\App::environment('local') ? 'public' : ''.'storage/app-assets/images/slider/banner08.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'slider09',
                'image' => !\App::environment('local') ? 'public' : ''.'storage/app-assets/images/slider/banner09.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'slider10',
                'image' => !\App::environment('local') ? 'public' : ''.'storage/app-assets/images/slider/banner10.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
    	]);
    }
}

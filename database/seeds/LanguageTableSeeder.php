<?php

use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('languages')->insert([
		    [
			    'name' => 'Vietnamese',
			    'code' => 'vi',
			    'locate' => 'vi-vn.UTF-8,vi-vn,vi-vn,vietnamese',
			    'image' => 'vn.png',
			    'sort_order' => 1,
			    'status' => 0
		    ],
		    [
			    'name' => 'English',
			    'code' => 'en',
			    'locate' => 'en-US,en_US.UTF-8,en_US,en-gb,english',
			    'image' => 'vn.png',
			    'sort_order' => 2,
			    'status' => 0
		    ]

	    ]);
    }
}

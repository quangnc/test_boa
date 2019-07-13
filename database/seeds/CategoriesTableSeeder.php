<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'category_id' => 1,
                'sort_order' => 1
            ],
            [
                'category_id' => 2,
                'sort_order' => 2
            ],
            [
                'category_id' => 3,
                'sort_order' => 3
            ],
            [
                'category_id' => 4,
                'sort_order' => 4
            ],
            [
                'category_id' => 5,
                'sort_order' => 5
            ],
            [
                'category_id' => 6,
                'sort_order' => 6
            ],
        ]);
    }
}

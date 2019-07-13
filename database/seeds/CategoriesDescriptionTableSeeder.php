<?php

use Illuminate\Database\Seeder;

class CategoriesDescriptionTableSeeder extends Seeder
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
                'category_desc_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'name' => 'Trang chủ',
                'description' => 'Trang chủ'
            ],
            [
                'category_desc_id' => 2,
                'category_id' => 1,
                'language_id' => 2,
                'name' => 'Home',
                'description' => 'Home'
            ],
            [
                'category_desc_id' => 3,
                'category_id' => 2,
                'language_id' => 1,
                'name' => 'Giới thiệu',
                'description' => 'Giới thiệu'
            ],
            [
                'category_desc_id' => 4,
                'category_id' => 2,
                'language_id' => 2,
                'name' => 'Introduction',
                'description' => 'Introduction'
            ],
            [
                'category_desc_id' => 5,
                'category_id' => 3,
                'language_id' => 1,
                'name' => 'thông tin công nhận',
                'description' => 'thông tin công nhận'
            ],
            [
                'category_desc_id' => 6,
                'category_id' => 3,
                'language_id' => 2,
                'name' => 'Accreditation infomation',
                'description' => 'Accreditation infomation'
            ],
            [
                'category_desc_id' => 7,
                'category_id' => 4,
                'language_id' => 1,
                'name' => 'Đào tạo ',
                'description' => 'Đào tạo '
            ],
            [
                'category_desc_id' => 8,
                'category_id' => 4,
                'language_id' => 2,
                'name' => 'Trainning',
                'description' => 'Trainning'
            ],
            [
                'category_desc_id' => 9,
                'category_id' => 5,
                'language_id' => 1,
                'name' => 'thử nghiệm thành thạo',
                'description' => 'thử nghiệm thành thạo'
            ],
            [
                'category_desc_id' => 10,
                'category_id' => 5,
                'language_id' => 2,
                'name' => 'proficiency testing',
                'description' => 'proficiency testing'
            ],
            [
                'category_desc_id' => 11,
                'category_id' => 6,
                'language_id' => 1,
                'name' => 'liên hệ ',
                'description' => 'liên hệ'
            ],
            [
                'category_desc_id' => 12,
                'category_id' => 6,
                'language_id' => 2,
                'name' => 'contact',
                'description' => 'contact'
            ],
        ]);
    }
}

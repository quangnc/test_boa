<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;

use App\Models\BlogCategory;
use App\Models\BlogCategoryDescription;

class BlogCategoryRepository implements CRUDInterface {
    use ConfigSetting;
    public function index() 
    {
        $data['blog_category'] = [];

        $blog_category = BlogCategory::all();

        if($blog_category) {
            foreach($blog_category as $blog_category) {
                $blog_category_description = $blog_category->blog_category_descriptions()
                                                            ->where('language_id', $this->adminLanguage())
                                                            ->first();
                $data['blog_category'][] = array(
                    'id' => $blog_category->blog_category_id,
                    'blog_category_sort_order' => $blog_category->sort_order,
                    'blog_category_name'        => $blog_category_description->name,
                    'blog_category_description'        => $blog_category_description->description,
                );
            }
        }
        return $data;
    }

    public function edit( $id ) 
    {
        $data = [];
        $blog_category = BlogCategory::find($id);
		$blog_category_descriptions = [];
		foreach($blog_category->blog_category_descriptions as $blog_category_description) {
			$blog_category_descriptions[$blog_category_description->language_id] = $blog_category_description;
		}
		$data['blog_category'] = $blog_category;
		$data['blog_category_descriptions'] = $blog_category_descriptions;
		return $data;
    }
}
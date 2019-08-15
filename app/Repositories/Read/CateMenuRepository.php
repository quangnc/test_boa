<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;

use App\Models\CateMenu;

class CateMenuRepository implements CRUDInterface {
    use ConfigSetting;
    public function index() 
    {
        $data['blog_post'] = [];
        $blog_posts         = CateMenu::orderBy('sort_order', 'DESC')->get();
        if($blog_posts) {
            foreach($blog_posts as $blog_post) {
                $blog_post_description = $blog_post->cate_menu_descriptions()
                                                ->where('language_id', $this->adminLanguage())
                                                ->first();
                if($blog_post_description) {
                    $data['blog_post'][] = array(
                        'id'         => $blog_post->cate_menu_id,
                        'blog_post_status'     => $blog_post->status,
                        'blog_post_sort_order' => $blog_post->sort_order,
                        'blog_post_name'		 =>  $blog_post_description->name
                    );
                }
            }
        }

		return $data;
    }
    
    public function edit( $id ) 
    {
        $data = [];
        $blog_post = CateMenu::find($id);
		$blog_post_descriptions = [];
		foreach($blog_post->cate_menu_descriptions as $blog_post_description) {
			$blog_post_descriptions[$blog_post_description->language_id] = $blog_post_description;
		}
		$data['blog_post'] = $blog_post;
        $data['blog_post_descriptions'] = $blog_post_descriptions;
		return $data;
    }

}
<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Helper;
use App\Repositories\Read\ConfigSetting;

class NewsController extends Controller {
	use ConfigSetting;
	public function index( $data ) {
		$setting = json_decode($data->setting);
		$number_blog_post = isset($setting->number_blog_post) ? $setting->number_blog_post : 0;
		$blog_posts = BlogPost::where('status', 0)
								->take($number_blog_post)
								->get();

		$data_blog_posts = [];
		if($blog_posts) {
            foreach($blog_posts as $blog_post) {
                $blog_post_description  = $blog_post->blog_post_descriptions()
                                    ->where('language_id', $this->adminLanguage())
									->first();
                $data_blog_posts[] = array(
                    'blog_post' => $blog_post,
					'blog_post_description' => $blog_post_description,
					'slug' => route('detail-blog', Helper::vn_to_str($blog_post_description->name.'-'.$blog_post->post_id)),
				);
            }
		}
		return view( 'modules.news' )->with( 'data_blog_posts', $data_blog_posts );
	}
}
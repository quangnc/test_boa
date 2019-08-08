<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use Helper;
use App\Repositories\Read\ConfigSetting;
class NewController extends Controller
{
	use ConfigSetting;
	public function blogs(){
		$blogs = BlogPost::with(['blog_post_descriptions' => function ($query) {
			$query->where('language_id', config('app.language', $this->adminLanguage()));
		}])->orderBy('created_at', 'desc')->paginate(9);
		
		$blog_images = [];
		if($blogs) {
			foreach( $blogs as $blog) {
				$blog_images[] = array(
					'blog_id' => $blog->post_id,
					'image_thumb' => Helper::resize($blog->image, 960, 643),
					'image' => $blog->image
				);
			}
		}
		return view('frontpage.blog.blogs', compact('blogs', 'blog_images'));
	}

	public function detailBlog( $slug_id) 
	{
		// tach chuoi thanh mang n phan tu 
        $id = explode("-", $slug_id);
        // array_pop get data cuoi trong mang
		$id = array_pop($id);
		
		$blog = BlogPost::find($id);
		$blog_description = $blog->blog_post_descriptions()->where('language_id', config('app.language', $this->adminLanguage()))->first();

		return view('frontpage.blog.detail-blog', compact( 'blog', 'blog_description' ));
	}
}

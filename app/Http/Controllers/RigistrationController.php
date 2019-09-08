<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\Models\BlogPost;
use App\Repositories\Read\ConfigSetting;

class RigistrationController extends Controller {
    use ConfigSetting;

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		
		$data['pageClass'] = "html not-front not-logged-in no-sidebars page-node page-node-add page-node-add-dang-ky i18n-vi adminimal-theme jquery-once-1-processed mq-desktop";
        return view('frontpage.registration-full', compact('data'));

	}

	public function apply() {
		$data['pageClass'] = "html not-front not-logged-in no-sidebars page-node page-node- page-node-15428 node-type-static-page i18n-vi adminimal-theme page-views page-views jquery-once-1-processed mq-desktop";
		//new  7
        $blogs = BlogPost::with('blog_post_descriptions', 'blog_categories' )->get();
        if ( $blogs) {
            foreach($blogs as $blog) {
                $blogCate = $blog->blog_categories->blog_category_descriptions()->where('language_id', config('app.language', $this->adminLanguage()))->first();
                $blogPosts =  BlogPost::where('blog_category_id', $blogCate->blog_category_id)->with(['blog_post_descriptions' => function ($query) {
                        $query->where('language_id', config('app.language', $this->adminLanguage()));
                    }])->orderBy('created_at', 'desc')->take(2)->get();
                $blogName = "";
                if($blogPosts) {
                    foreach($blogPosts as $blogPost) {
                        $blogName = $blogPost->blog_post_descriptions()->first();
                    }
                }
                $data['news'][] = array(
                    'id' => $blog->post_id,
                    'img' => $blog->image,
                    'blogCateName' => $blogCate->name,
                    'blogPost' =>    $blogName !== "" ? $blogName->name : '',

                );
            }
        }
		return view('frontpage.product.apply', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		
		return view( 'admin.blog.blog-post.blog-post-form', compact( 'data', 'blog_post_categories' ) );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {
		
		return redirect()->route( 'blog-post.index' );
	}
}

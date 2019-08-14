<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Models\Slide;
use App\Models\BlogPost;
use App\Models\Partner;
use App\Models\Support;
use App\Repositories\Read\ConfigSetting;
class HomeController extends Controller
{
    use ConfigSetting;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pageClass'] = "html front not-logged-in no-sidebars page-node i18n-vi adminimal-theme ";
        $slides = Slide::all()->take(3);
        $partners = Partner::all()->take(5);
        $supports = Support::with(['support_descriptions' => function ($query) {
            $query->where('language_id', config('app.language', $this->adminLanguage()));
        }])->orderBy('created_at', 'desc')->take(2)->get();
        $data = [];
        $blogs = BlogPost::with('blog_post_descriptions', 'blog_categories')->get();
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
                $data[] = array(
                    'blogCateName' => $blogCate->name,
                    'blogPost'     =>    $blogName !== "" ? $blogName->name : '',
                );
            }
        }
        return view('frontpage.home', compact('data', 'slides', 'partners', 'supports'));
    }

    public function contact() {
	    return view('frontpage.contact-us');
    }
}

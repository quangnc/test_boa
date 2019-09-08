<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BlogPost;
use App\Models\DataProduct;
use App\Models\ApplicationForm;
use App\Models\Document;
use App\Models\UploadFile;

use App\Repositories\Read\ConfigSetting;
class InspectionBodiesController extends Controller
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

    public function introduction()
    {
        $data['pageClass'] = "html not-front not-logged-in no-sidebars page-tim-kiem-thi-nghiem i18n-en adminimal-theme page-views page-views jquery-once-1-processed mq-desktop";
        $data['product'] = null;
        $data['news'] = null;
        $products = Product::with(['product_descriptions'])->get();
        if($products) {
            foreach($products as $product) {
                $data['product'] = $product->product_descriptions()->where('language_id', config('app.language', $this->adminLanguage()))->first();
            }
        }

        //new  7
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
                $data['news'][] = array(
                    'id' => $blog->post_id,
                    'img' => $blog->image,
                    'blogCateName' => $blogCate->name,
                    'blogPost' =>    $blogName !== "" ? $blogName->name : '',

                );
            }
        }
        return view('frontpage.product.inspection_bodies.introduction', compact('data'));
    }

    public function index()
    {
        $data['pageClass'] = "html not-front not-logged-in no-sidebars page-tim-kiem-thi-nghiem i18n-en adminimal-theme page-views page-views jquery-once-1-processed mq-desktop";
        return view('frontpage.product.inspection_bodies.search', compact('data'));
    }

    public function detail( $id ) 
	{
        $data['pageClass'] = "html not-front not-logged-in no-sidebars page-tim-kiem-thi-nghiem i18n-en adminimal-theme page-views page-views jquery-once-1-processed mq-desktop";
		$blog = BlogPost::find($id);
		$blog_description = $blog->blog_post_descriptions()->where('language_id', config('app.language', $this->adminLanguage()))->first();
        
        //new  7
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
                $data['news'][] = array(
                    'id' => $blog->post_id,
                    'img' => $blog->image,
                    'blogCateName' => $blogCate->name,
                    'blogPost' =>    $blogName !== "" ? $blogName->name : '',

                );
            }
        }
        return view('frontpage.product.inspection_bodies.detail', compact( 'blog', 'blog_description', 'data' ));
    }
    
    public function getList() {
        return view();
    }

    public function search() {
        $data['pageClass'] = "html not-front not-logged-in no-sidebars page-tim-kiem-giam-dinh i18n-vi adminimal-theme page-views page-views page-views jquery-once-1-processed mq-desktop";
        // 1. y tế
        // product_id
        $dataProducts = DataProduct::where('product_id', 3)->with(['data_product_descriptions' => function ($query) {
            $query->where('language_id', config('app.language', $this->adminLanguage()));
        }])->orderBy('created_at', 'desc')->take(10)->get();
        $count = $dataProducts->count();
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

        return view('frontpage.product.inspection_bodies.search', compact( 'blogs', 'data', 'dataProducts', 'count' ));
    }

    public function applicationForm() {
        $data['pageClass'] = "html not-front not-logged-in no-sidebars page-tim-kiem-thi-nghiem i18n-en adminimal-theme page-views page-views jquery-once-1-processed mq-desktop";
        // 1. y tế
        // product_id
        $applicationForm = ApplicationForm::where('product_id', 3)->with(['application_form_descriptions' => function ($query) {
            $query->where('language_id', config('app.language', $this->adminLanguage()));
        }])->orderBy('created_at', 'desc')->get();

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
        $file = UploadFile::all()->where('product_id', 3)->where('loai', 0);

        return view('frontpage.product.inspection_bodies.application-form', compact( 'blogs', 'data', 'applicationForm', 'file' ));
    }

    public function document() {
        $data['pageClass'] = "html not-front not-logged-in no-sidebars page-tim-kiem-thi-nghiem i18n-en adminimal-theme page-views page-views jquery-once-1-processed mq-desktop";
        // 1. y tế
        // product_id
        $documents = Document::where('product_id', 3)->with(['document_descriptions' => function ($query) {
            $query->where('language_id', config('app.language', $this->adminLanguage()));
        }])->orderBy('created_at', 'desc')->get();
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
        $file = UploadFile::all()->where('product_id', 3)->where('loai', 1);

        return view('frontpage.product.inspection_bodies.document', compact( 'blogs', 'data', 'documents', 'file'));
    }
}

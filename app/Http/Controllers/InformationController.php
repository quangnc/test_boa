<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Repositories\Read\ConfigSetting;
use App\Models\Menu;
use App\Models\CateMenu;
use App\Models\BlogPost;
use App\Models\BlogCategoryDescription;
use App\Models\BlogCategory;

class InformationController extends Controller
{
    use ConfigSetting;

    public function detail( $id)  {
        $data['pageClass'] = "html not-front not-logged-in no-sidebars page-node page-node- page-node-11968 node-type-tintuc i18n-vi adminimal-theme page-views page-views jquery-once-1-processed mq-desktop";
        $menu = Menu::find($id);
        $data['id'] = $id;
        $menuDescription = $menu->menu_descriptions()->where('language_id', config('app.language', $this->adminLanguage()))->first();
        $blogs = BlogPost::with('blog_post_descriptions', 'blog_categories' )->get();
        $cate_menu = $menu->cate_menu_id;
        $listItemMenu = Menu::where('cate_menu_id', $cate_menu)->get();
        $listMenu = array();
        foreach ($listItemMenu as $value) {
            $item =  $value->menu_descriptions()->where('language_id', config('app.language', $this->adminLanguage()))->first();
            $listMenu[] = $item;
        }
        
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
        return view('frontpage.information.information', compact('data', 'menu', 'menuDescription', 'listMenu'));
    }

    public function detailPost( $id, $cate)  {
        $data['pageClass'] = "html not-front not-logged-in no-sidebars page-tim-kiem-thi-nghiem i18n-en adminimal-theme page-views page-views jquery-once-1-processed mq-desktop";
        $menuDescription = BlogPost::find($id)->blog_post_descriptions()->where('language_id', config('app.language', $this->adminLanguage()))
        ->first();
        $blogs = BlogPost::with('blog_post_descriptions', 'blog_categories' )->get();
        if ( $blogs) {
            foreach($blogs as $blog) {
                $blogCate = $blog
                                ->blog_categories
                                ->blog_category_descriptions()
                                ->where('language_id', config('app.language', $this->adminLanguage()))
                                ->first();
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
        return view('frontpage.information.information', compact('data', 'menuDescription'));
    }

    public function getListNews()  {
        // id new = 2
        $data['pageClass'] = "html not-front not-logged-in no-sidebars page-tim-kiem-thi-nghiem i18n-en adminimal-theme page-views page-views jquery-once-1-processed mq-desktop";
        $blogPostFind = BlogPost::where('blog_category_id', 2)->get();
        $language = config('app.language', $this->adminLanguage());
        $title = "Tin tức";
        $blogs = BlogPost::with('blog_post_descriptions', 'blog_categories' )->get();
        if ( $blogs) {
            foreach($blogs as $blog) {
                $blogCate = $blog
                                ->blog_categories
                                ->blog_category_descriptions()
                                ->where('language_id', config('app.language', $this->adminLanguage()))
                                ->first();
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
        return view('frontpage.information.list-information', compact('title', 'data', 'menuDescription', 'blogPostFind', 'language'));
    }

    public function getListTrainning()  {
        // id trainning = 1
        $data['pageClass'] = "html not-front not-logged-in no-sidebars page-tim-kiem-thi-nghiem i18n-en adminimal-theme page-views page-views jquery-once-1-processed mq-desktop";
        $blogPostFind = BlogPost::where('blog_category_id', 1)->get();
        $language = config('app.language', $this->adminLanguage());
        $title = "Tin đào tạo";
        $blogs = BlogPost::with('blog_post_descriptions', 'blog_categories' )->get();
        if ( $blogs) {
            foreach($blogs as $blog) {
                $blogCate = $blog
                                ->blog_categories
                                ->blog_category_descriptions()
                                ->where('language_id', config('app.language', $this->adminLanguage()))
                                ->first();
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
        return view('frontpage.information.list-information', compact('title', 'data', 'menuDescription', 'blogPostFind', 'language'));
    }
}

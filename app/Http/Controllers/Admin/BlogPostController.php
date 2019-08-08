<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\BlogPostService;
use Validator;

class BlogPostController extends Controller {
	protected $_blogPostService;

	public function __construct( BlogPostService $blogPostService ) {
		$this->_blogPostService = $blogPostService;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$data = $this->_blogPostService->index();

		$data['page_title']  = "Blog post";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'blog-post.index', 'title' => 'List Blog Post', 'active' => true ),
		);
		$data['actions']     = [
			array(
				'className' => "btn btn-primary",
				'text'      => 'New Blog Post ',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route( 'blog-post.create' )
			)
		];
		return view( 'admin.blog.blog-post.blog-post-list', compact( 'data' ) );

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$data_blog_post = $this->_blogPostService->create();
		$blog_post_categories = $data_blog_post['blog_cate'];
		$data['blog_post_tag'] = [];

		$form = "blog-post";
		$data['page_title']  = "Create Blog Post";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'blog-post.index', 'title' => 'Create Blog Post', 'active' => true ),
		);
		$data['action']      = route('blog-post.store');
		$data['form']        = $form;

		$data['actions'] = [
			array(
				'className' => "btn btn-default",
				'text'      => 'Back',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route('blog-post.index' )
			),
			array(
				'className' => "btn btn-primary save-form",
				'form'      => $form,
				'text'      => 'Save',
				'id'        => '',
				'tag'       => 'button'
			),
		];
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
		// dd($request->all());
		$request->validate( [
			'blog_post_descriptions.*.*' => 'required',
			'blog_post.*'              => 'required',
			'blog_tag.*'              => 'required',

		]);
		$data['blog_post_descriptions'] = $request->blog_post_descriptions;
		$data['blog_post'] = $request->blog_post;
		$data['blog_tag'] = $request->blog_tag;
		$this->_blogPostService->store( $data );

		return redirect()->route( 'blog-post.index' );
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show( $id ) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit( Request $request, $id ) {
		$data_blog        = $this->_blogPostService->edit( $id );
		$data_blog_post = $this->_blogPostService->create();

		$blog_post_categories = $data_blog_post['blog_cate'];
		$blog_post = $request->old('blog_post') ? $request->old('blog_post') : $data_blog['blog_post'];
        $blog_post_descriptions = $request->old('blog_post_descriptions') ? $request->old('blog_post_descriptions') : $data_blog['blog_post_descriptions'];
		$blog_tag =  $request->old('blog_tag') ? $request->old('blog_tag') : $data_blog['blog_tag'];
		
		$form = "blog-post-form";
        $data['page_title']  = "Edit Blog Post";
        $data['breadcrumbs'] = array(
            array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
            array( 'router' => 'blog-post.index', 'title' => 'Edit Blog Post', 'active' => true ),
        );
        $data['action']      = route( 'blog-post.update', [ 'id' => $id ] );
        $data['form']        = $form;

        $data['actions'] = [
            array(
                'className' => "btn btn-default",
                'text'      => 'Back',
                'id'        => '',
                'tag'       => 'a',
                'href'      => route( 'blog-post.index' )
            ),
            array(
                'className' => "btn btn-primary save-form",
                'form'      => $form,
                'text'      => 'Save',
                'id'        => '',
                'tag'       => 'button'
            ),
		];
		return view( 'admin.blog.blog-post.blog-post-form', compact( 'data', 'blog_tag', 'blog_post_descriptions', 'blog_post', 'blog_post_categories' ) );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, $id ) {
		$request->validate( [
			'blog_post_descriptions.*.*' => 'required',
			'blog_post.*'              => 'required',
			'blog_tag.*'              => 'required',

		]);
		$data['blog_post_descriptions'] = $request->blog_post_descriptions;
		$data['blog_post'] = $request->blog_post;
		$data['blog_tag'] = $request->blog_tag;
		$this->_blogPostService->update( $data, $id );
		return redirect()->route( 'blog-post.index' );
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		$data = $this->_blogPostService->destroy( $id );
		return redirect()->route( 'blog-post.index' )->with( 'success', $data );
	}
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\BlogCategoryService;
use Validator;

class BlogCategoryController extends Controller {
	protected $_blogCategoryService;
	public function __construct( BlogCategoryService $blogCategoryService ) {
		$this->_blogCategoryService = $blogCategoryService;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$data = $this->_blogCategoryService->index();

		$data['page_title']  = "Blog Category";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'blog-category.index', 'title' => 'List Blog Category', 'active' => true ),
		);
		$data['actions']     = [
			array(
				'className' => "btn btn-primary",
				'text'      => 'New Blog Category ',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route( 'blog-category.create' )
			)
		];
		return view( 'admin.blog.blog-category.blog-category-list', compact( 'data' ) );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
        $form = "blog-category";
		$data['page_title']  = "Create Blog Category";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'blog-category.index', 'title' => 'Create Blog Category', 'active' => true ),
		);
		$data['action']      = route('blog-category.store');
		$data['form']        = $form;

		$data['actions'] = [
			array(
				'className' => "btn btn-default",
				'text'      => 'Back',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route('blog-category.index' )
			),
			array(
				'className' => "btn btn-primary save-form",
				'form'      => $form,
				'text'      => 'Save',
				'id'        => '',
				'tag'       => 'button'
			),
		];
		return view( 'admin.blog.blog-category.blog-category-form', compact( 'data' ) );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {
		$request->validate( [
			// 'blog_category_descriptions.*.*' => 'required',
			'blog_category'      => 'required',
		]);
		$data['blog_category'] = $request->blog_category;
		$data['blog_category_descriptions'] = $request->blog_category_descriptions;
		$this->_blogCategoryService->store( $data );
		return redirect()->route( 'blog-category.index' );

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
		$data_blog_category          = $this->_blogCategoryService->edit( $id );
		$blog_category =  $request->old('blog_category') ?  $request->old('blog_category') : $data_blog_category['blog_category'];
		$blog_category_descriptions =  $request->old('blog_category_descriptions') ?  $request->old('blog_category_descriptions') : $data_blog_category['blog_category_descriptions'];
		$form = "blog-category-form";
		$data['page_title']  = "Edit Blog Category";
        $data['breadcrumbs'] = array(
            array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
            array( 'router' => 'blog-category.index', 'title' => 'Edit Blog Category', 'active' => true ),
        );
        $data['action']      = route( 'blog-category.update', [ 'id' => $id ] );
        $data['form']        = $form;

        $data['actions'] = [
            array(
                'className' => "btn btn-default",
                'text'      => 'Back',
                'id'        => '',
                'tag'       => 'a',
                'href'      => route( 'blog-category.index' )
            ),
            array(
                'className' => "btn btn-primary save-form",
                'form'      => $form,
                'text'      => 'Save',
                'id'        => '',
                'tag'       => 'button'
            ),
		];

		return view( 'admin.blog.blog-category.blog-category-form', compact( 'data', 'blog_category', 'blog_category_descriptions' ) );
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
			// 'blog_category_descriptions.*.*' => 'required',
			'blog_category'      => 'required',

		]);
		$data['blog_category'] = $request->blog_category;
		$data['blog_category_descriptions'] = $request->blog_category_descriptions;
		$this->_blogCategoryService->update( $data, $id );
		return redirect()->route( 'blog-category.index' );
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		$data = $this->_blogCategoryService->destroy( $id );
		return redirect()->route( 'blog-category.index' )->with( 'success', $data );
	}
}

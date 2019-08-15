<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CateMenuService;
use Validator;

class CateMenuController extends Controller {
	protected $_cateMenuService;

	public function __construct( CateMenuService $cateMenuService ) {
		$this->_cateMenuService = $cateMenuService;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$data = $this->_cateMenuService->index();

		$data['page_title']  = "Cate menu";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'cate-menu.index', 'title' => 'List Cate menu', 'active' => true ),
		);
		$data['actions']     = [
			array(
				'className' => "btn btn-primary",
				'text'      => 'New Cate menu ',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route( 'cate-menu.create' )
			)
		];
		return view( 'admin.menu.cate-menu.cate-menu-list', compact( 'data' ) );

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$data_blog_post = $this->_cateMenuService->create();
		$data['blog_post_tag'] = [];

		$form = "cate-menu";
		$data['page_title']  = "Create Cate menu";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'cate-menu.index', 'title' => 'Create Cate menu', 'active' => true ),
		);
		$data['action']      = route('cate-menu.store');
		$data['form']        = $form;

		$data['actions'] = [
			array(
				'className' => "btn btn-default",
				'text'      => 'Back',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route('cate-menu.index' )
			),
			array(
				'className' => "btn btn-primary save-form",
				'form'      => $form,
				'text'      => 'Save',
				'id'        => '',
				'tag'       => 'button'
			),
		];
		return view( 'admin.menu.cate-menu.cate-menu-form', compact( 'data', 'blog_post_categories' ) );
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
		]);
		$data['blog_post_descriptions'] = $request->blog_post_descriptions;
		$data['blog_post'] = $request->blog_post;
		$this->_cateMenuService->store( $data );

		return redirect()->route( 'cate-menu.index' );
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
		$data_blog        = $this->_cateMenuService->edit( $id );
		$data_blog_post = $this->_cateMenuService->create();

		$blog_post = $request->old('blog_post') ? $request->old('blog_post') : $data_blog['blog_post'];
        $blog_post_descriptions = $request->old('blog_post_descriptions') ? $request->old('blog_post_descriptions') : $data_blog['blog_post_descriptions'];
		
		$form = "cate-menu-form";
        $data['page_title']  = "Edit Cate menu";
        $data['breadcrumbs'] = array(
            array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
            array( 'router' => 'cate-menu.index', 'title' => 'Edit Cate menu', 'active' => true ),
        );
        $data['action']      = route( 'cate-menu.update', [ 'id' => $id ] );
        $data['form']        = $form;

        $data['actions'] = [
            array(
                'className' => "btn btn-default",
                'text'      => 'Back',
                'id'        => '',
                'tag'       => 'a',
                'href'      => route( 'cate-menu.index' )
            ),
            array(
                'className' => "btn btn-primary save-form",
                'form'      => $form,
                'text'      => 'Save',
                'id'        => '',
                'tag'       => 'button'
            ),
		];
		return view( 'admin.menu.cate-menu.cate-menu-form', compact( 'data', 'blog_post_descriptions', 'blog_post', 'blog_post_categories' ) );
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

		]);
		$data['blog_post_descriptions'] = $request->blog_post_descriptions;
		$data['blog_post'] = $request->blog_post;
		$this->_cateMenuService->update( $data, $id );
		return redirect()->route( 'cate-menu.index' );
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		$data = $this->_cateMenuService->destroy( $id );
		return redirect()->route( 'cate-menu.index' )->with( 'success', $data );
	}
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\MenuService;
use Validator;

class MenuController extends Controller {
	protected $_menuService;

	public function __construct( MenuService $menuService ) {
		$this->_menuService = $menuService;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$data = $this->_menuService->index();

		$data['page_title']  = "menu";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'menu.index', 'title' => 'List menu', 'active' => true ),
		);
		$data['actions']     = [
			array(
				'className' => "btn btn-primary",
				'text'      => 'New menu ',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route( 'menu.create' )
			)
		];
		return view( 'admin.menu.menu.menu-list', compact( 'data' ) );

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$data_blog_post = $this->_menuService->create();
		$blog_post_categories = $data_blog_post['blog_cate'];
		$data['blog_post_tag'] = [];

		$form = "menu";
		$data['page_title']  = "Create menu";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'menu.index', 'title' => 'Create menu', 'active' => true ),
		);
		$data['action']      = route('menu.store');
		$data['form']        = $form;

		$data['actions'] = [
			array(
				'className' => "btn btn-default",
				'text'      => 'Back',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route('menu.index' )
			),
			array(
				'className' => "btn btn-primary save-form",
				'form'      => $form,
				'text'      => 'Save',
				'id'        => '',
				'tag'       => 'button'
			),
		];
		return view( 'admin.menu.menu.menu-form', compact( 'data', 'blog_post_categories' ) );
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
		$this->_menuService->store( $data );

		return redirect()->route( 'menu.index' );
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
		$data_blog        = $this->_menuService->edit( $id );
		$data_blog_post = $this->_menuService->create();

		$blog_post_categories = $data_blog_post['blog_cate'];
		$blog_post = $request->old('blog_post') ? $request->old('blog_post') : $data_blog['blog_post'];
        $blog_post_descriptions = $request->old('blog_post_descriptions') ? $request->old('blog_post_descriptions') : $data_blog['blog_post_descriptions'];
		
		$form = "menu-form";
        $data['page_title']  = "Edit menu";
        $data['breadcrumbs'] = array(
            array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
            array( 'router' => 'menu.index', 'title' => 'Edit menu', 'active' => true ),
        );
        $data['action']      = route( 'menu.update', [ 'id' => $id ] );
        $data['form']        = $form;

        $data['actions'] = [
            array(
                'className' => "btn btn-default",
                'text'      => 'Back',
                'id'        => '',
                'tag'       => 'a',
                'href'      => route( 'menu.index' )
            ),
            array(
                'className' => "btn btn-primary save-form",
                'form'      => $form,
                'text'      => 'Save',
                'id'        => '',
                'tag'       => 'button'
            ),
		];
		return view( 'admin.menu.menu.menu-form', compact( 'data', 'blog_post_descriptions', 'blog_post', 'blog_post_categories' ) );
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
		$this->_menuService->update( $data, $id );
		return redirect()->route( 'menu.index' );
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		$data = $this->_menuService->destroy( $id );
		return redirect()->route( 'menu.index' )->with( 'success', $data );
	}
}

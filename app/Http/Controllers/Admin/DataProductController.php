<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\DataProductService;
use Validator;

class DataProductController extends Controller {
	protected $_dataProductService;

	public function __construct( DataProductService $dataProductService ) {
		$this->_dataProductService = $dataProductService;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$data = $this->_dataProductService->index();

		$data['page_title']  = "Data Product";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'data-product.index', 'title' => 'List Data Product', 'active' => true ),
		);
		$data['actions']     = [
			array(
				'className' => "btn btn-primary",
				'text'      => 'New Data Product ',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route( 'data-product.create' )
			)
		];
		return view( 'admin.products.data-product.data-product-list', compact( 'data' ) );

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$data_blog_post = $this->_dataProductService->create();
		$blog_post_categories = $data_blog_post['blog_cate'];
		$data['blog_post_tag'] = [];

		$form = "data-product";
		$data['page_title']  = "Create Data Product";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'data-product.index', 'title' => 'Create Data Product', 'active' => true ),
		);
		$data['action']      = route('data-product.store');
		$data['form']        = $form;

		$data['actions'] = [
			array(
				'className' => "btn btn-default",
				'text'      => 'Back',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route('data-product.index' )
			),
			array(
				'className' => "btn btn-primary save-form",
				'form'      => $form,
				'text'      => 'Save',
				'id'        => '',
				'tag'       => 'button'
			),
		];
		return view( 'admin.products.data-product.data-product-form', compact( 'data', 'blog_post_categories' ) );
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
		$this->_dataProductService->store( $data );

		return redirect()->route( 'data-product.index' );
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
		$data_blog        = $this->_dataProductService->edit( $id );
		$data_blog_post = $this->_dataProductService->create();

		$blog_post_categories = $data_blog_post['blog_cate'];
		$blog_post = $request->old('blog_post') ? $request->old('blog_post') : $data_blog['blog_post'];
        $blog_post_descriptions = $request->old('blog_post_descriptions') ? $request->old('blog_post_descriptions') : $data_blog['blog_post_descriptions'];
		
		$form = "data-product-form";
        $data['page_title']  = "Edit Data Product";
        $data['breadcrumbs'] = array(
            array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
            array( 'router' => 'data-product.index', 'title' => 'Edit Data Product', 'active' => true ),
        );
        $data['action']      = route( 'data-product.update', [ 'id' => $id ] );
        $data['form']        = $form;

        $data['actions'] = [
            array(
                'className' => "btn btn-default",
                'text'      => 'Back',
                'id'        => '',
                'tag'       => 'a',
                'href'      => route( 'data-product.index' )
            ),
            array(
                'className' => "btn btn-primary save-form",
                'form'      => $form,
                'text'      => 'Save',
                'id'        => '',
                'tag'       => 'button'
            ),
		];
		return view( 'admin.products.data-product.data-product-form', compact( 'data', 'blog_post_descriptions', 'blog_post', 'blog_post_categories' ) );
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
		$this->_dataProductService->update( $data, $id );
		return redirect()->route( 'data-product.index' );
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		$data = $this->_dataProductService->destroy( $id );
		return redirect()->route( 'data-product.index' )->with( 'success', $data );
	}
}

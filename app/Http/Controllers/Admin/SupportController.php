<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\SupportService;
use Validator;

class SupportController extends Controller {
	protected $_supportService;

	public function __construct( SupportService $supportService ) {
		$this->_supportService = $supportService;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$data = $this->_supportService->index();

		$data['page_title']  = "Support";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'support.index', 'title' => 'List Support', 'active' => true ),
		);
		$data['actions']     = [
			array(
				'className' => "btn btn-primary",
				'text'      => 'New Support ',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route( 'support.create' )
			)
		];
		return view( 'admin.support.support.support-list', compact( 'data' ) );

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$data_blog_post = $this->_supportService->create();
		$data['blog_post_tag'] = [];

		$form = "support";
		$data['page_title']  = "Create Support";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'support.index', 'title' => 'Create Support', 'active' => true ),
		);
		$data['action']      = route('support.store');
		$data['form']        = $form;

		$data['actions'] = [
			array(
				'className' => "btn btn-default",
				'text'      => 'Back',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route('support.index' )
			),
			array(
				'className' => "btn btn-primary save-form",
				'form'      => $form,
				'text'      => 'Save',
				'id'        => '',
				'tag'       => 'button'
			),
		];
		return view( 'admin.support.support.support-form', compact( 'data' ) );
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
		$this->_supportService->store( $data );

		return redirect()->route( 'support.index' );
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
		$data_blog        = $this->_supportService->edit( $id );
		$data_blog_post = $this->_supportService->create();

		$blog_post = $request->old('blog_post') ? $request->old('blog_post') : $data_blog['blog_post'];
        $blog_post_descriptions = $request->old('blog_post_descriptions') ? $request->old('blog_post_descriptions') : $data_blog['blog_post_descriptions'];
		
		$form = "support-form";
        $data['page_title']  = "Edit Support";
        $data['breadcrumbs'] = array(
            array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
            array( 'router' => 'support.index', 'title' => 'Edit Support', 'active' => true ),
        );
        $data['action']      = route( 'support.update', [ 'id' => $id ] );
        $data['form']        = $form;

        $data['actions'] = [
            array(
                'className' => "btn btn-default",
                'text'      => 'Back',
                'id'        => '',
                'tag'       => 'a',
                'href'      => route( 'support.index' )
            ),
            array(
                'className' => "btn btn-primary save-form",
                'form'      => $form,
                'text'      => 'Save',
                'id'        => '',
                'tag'       => 'button'
            ),
		];
		return view( 'admin.support.support.support-form', compact( 'data', 'blog_post_descriptions', 'blog_post' ) );
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
		$this->_supportService->update( $data, $id );
		return redirect()->route( 'support.index' );
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		$data = $this->_supportService->destroy( $id );
		return redirect()->route( 'support.index' )->with( 'success', $data );
	}
}

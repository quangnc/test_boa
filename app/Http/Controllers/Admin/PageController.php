<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\PageService;

class PageController extends Controller {

	protected $service;

	/**
	 * PageController constructor.
	 */
	public function __construct( PageService $service ) {
		$this->service = $service;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$pages               = $this->service->index();
		$data['page_title']  = "Pages";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'page.index', 'title' => 'List Page', 'active' => true ),
		);
		$data['actions']     = [
			array(
				'className' => "btn btn-primary",
				'text'      => 'New Page ',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route( 'page.create' )
			)
		];

		return view( 'admin.page.page-list', compact( 'data', 'pages' ) );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {

		$formID = "module-form";

		$data['page_title']  = "Create Page";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'page.index', 'title' => 'List Page', 'active' => false ),
			array( 'router' => 'page.index', 'title' => 'Create Page', 'active' => true ),
		);
		$data['action']      = route( 'page.store' );
		$data['actions']     = [
			array(
				'className' => "btn btn-default",
				'text'      => 'Back',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route( 'page.index' )
			),
			array(
				'className' => "btn btn-primary save-form",
				'form'      => $formID,
				'text'      => 'Save',
				'id'        => '',
				'tag'       => 'button'
			),
		];

		$data['form'] = $formID;

		$page['status'] = 0;

		return view( 'admin.page.page-form', compact( 'data', 'page' ) );
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
			'page.*'                => 'required',
			'page_descriptions.*.*' => 'required'
		] );

		$data['page']              = $request->input( 'page' );
		$data['page_descriptions'] = $request->input( 'page_descriptions' );

		$this->service->store( $data );

		return redirect()->route( 'page.index' );
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
	public function edit( $id ) {

		$page_edit = $this->service->edit( $id );

		$page              = $page_edit['page'];
		$page_descriptions = $page_edit['page_descriptions'];

		$formID = "module-form";

		$data['page_title']  = "Edit Page";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'page.index', 'title' => 'List Page', 'active' => false ),
			array( 'router' => 'page.index', 'title' => 'Edit Page', 'active' => true ),
		);
		$data['action']      = route( 'page.update', [ 'id' => $page['page_id'] ] );
		$data['actions']     = [
			array(
				'className' => "btn btn-default",
				'text'      => 'Back',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route( 'page.index' )
			),
			array(
				'className' => "btn btn-primary save-form",
				'form'      => $formID,
				'text'      => 'Update',
				'id'        => '',
				'tag'       => 'button'
			),
		];

		$data['form'] = $formID;

		return view( 'admin.page.page-form', compact( 'data', 'page', 'page_descriptions' ) );
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
			'page.*'                => 'required',
			// 'page_descriptions.*.*' => 'required'
		] );

		$data['page']              = $request->input( 'page' );
		$data['page_descriptions'] = $request->input( 'page_descriptions' );

		$this->service->update( $data, $id );

		return redirect()->route( 'page.index' );
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		$this->service->destroy( $id );

		return redirect()->route( 'page.index' );
	}
}

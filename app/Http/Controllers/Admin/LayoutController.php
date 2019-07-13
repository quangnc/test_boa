<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Services\LayoutService;
use App\Services\ModuleService;

class LayoutController extends Controller {
	protected $layout;
	protected $module;

	/**
	 * LayoutController constructor.
	 */
	public function __construct( LayoutService $layout, ModuleService $module ) {
		$this->layout = $layout;
		$this->module = $module;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$layouts = $this->layout->index();

		$data['layouts']     = $layouts;
		$data['page_title']  = "Layouts";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'layout.index', 'title' => 'Layouts', 'active' => true ),
		);

		$data['actions'] = [
			array(
				'className' => "btn btn-primary",
				'text'      => 'New Layout',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route( 'layout.create' )
			)
		];

		return view( 'admin.layout.layout-list', [ 'data' => $data ] );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$data['modules'] = $this->module->index();
		$data['layouts'] = array();

		$form = "module-form";

		$data['page_title']  = "Layouts";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'layout.index', 'title' => 'Layouts', 'active' => false ),
			array( 'router' => 'layout.index', 'title' => 'Create layout', 'active' => true ),
		);

		$data['action']  = route( 'layout.store' );
		$data['actions'] = [
			array(
				'className' => "btn btn-default",
				'text'      => 'Back',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route( 'layout.index' )
			),
			array(
				'className' => "btn btn-primary save-form",
				'form'      => $form,
				'text'      => 'Save',
				'id'        => '',
				'tag'       => 'button'
			),
		];

		$data['form'] = $form;

		return view( 'admin.layout.layout-form', [ 'data' => $data ] );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {
		$name           = $request->input( 'name' );
		$route          = $request->input( 'route' );
		$layout_modules = json_decode( $request->input( 'layout_modules' ) );

		$this->layout->store( array( 'name' => $name, 'route' => $route, 'layout_modules' => $layout_modules ) );

		return redirect()->route( 'layout.index' );

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
	 * @param  string $code
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit( $id ) {
		$data            = $this->layout->edit( $id );
		$data['modules'] = $this->module->index();

		$form = "module-form";

		$data['id']          = $id;
		$data['page_title']  = "Layouts";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'layout.index', 'title' => 'Layouts', 'active' => false ),
			array( 'router' => 'layout.index', 'title' => 'Edit Layout', 'active' => true ),
		);

		$data['action']  = route( 'layout.update', [ 'id' => $id ] );
		$data['actions'] = [
			array(
				'className' => "btn btn-default",
				'text'      => 'Back',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route( 'layout.index' )
			),
			array(
				'className' => "btn btn-primary save-form",
				'form'      => $form,
				'text'      => 'Update',
				'id'        => '',
				'tag'       => 'button'
			),
		];

		$data['form'] = $form;

		return view( 'admin.layout.layout-form', [ 'data' => $data ] );
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
		$name           = $request->input( 'name' );
		$route          = $request->input( 'route' );
		$layout_modules = json_decode( $request->input( 'layout_modules' ) );

		$data = array( 'name' => $name, 'route' => $route, 'layout_modules' => $layout_modules );

		$this->layout->update( $data, $id );

		return redirect()->route( 'layout.index' );
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		$this->layout->destroy( $id );

		return back();
	}
}

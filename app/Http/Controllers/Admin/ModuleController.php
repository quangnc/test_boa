<?php

namespace App\Http\Controllers\Admin;

use App\Services\ModuleService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModuleController extends Controller {
	protected $module;

	/**
	 * ModuleController constructor.
	 */
	public function __construct( ModuleService $module ) {
		$this->module = $module;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		$data['module_data'] = $this->module->index();

		// Define list module
		$data['modules'] = array(
			array( 'name' => 'Gallery', 'code' => 'gallery' ),
			array( 'name' => 'Html', 'code' => 'html' ),
			array(
				'name'   => 'Mega menu',
				'code'   => 'megamenu',
				'unique' => true,
				'module' => $data['module_data']->where( 'code', 'megamenu' )->first()
			),
			array( 'name' => 'Heading', 'code' => 'heading' ),
			array( 'name' => 'Slideshow', 'code' => 'slideshow' ),
			array( 'name' => 'Room', 'code' => 'room' ),
			array( 'name' => 'Room Carousel', 'code' => 'roomCarousel' ),
			array( 'name' => 'Testimonial', 'code' => 'testimonial' ),
			array( 'name' => 'News', 'code' => 'news' ),
		);

		$data['page_title']  = "Modules";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'layout.index', 'title' => 'Modules', 'active' => true ),
		);
		$data['actions']     = [];
		return view( 'admin.modules.module-list', [ 'data' => $data ] );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create( Request $request ) {
		$code = $request->query( 'code' );

		$form = "module-form";

		$data['page_title']  = "Modules";
		$data['code']        = $code;
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'module.index', 'title' => 'Modules', 'active' => false ),
			array( 'router' => 'layout.index', 'title' => 'Create module', 'active' => true ),
		);
		$data['action']      = route( 'module.store' );
		$data['actions']     = [
			array(
				'className' => "btn btn-primary save-form",
				'form'      => $form,
				'text'      => 'Save',
				'id'        => '',
				'tag'       => 'button'
			),
		];

		$data['form'] = $form;

		$data['statusOptions'] = ['Enable', 'Disable'];
		$data['type'] = ['gallery', 'gallery-column'];
		$data['status'] = 1;

		return view( 'admin.modules.form.' . $code, [ 'data' => $data ] );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {
		$data = $request->input( 'module' );
		$this->module->store( $data );

		return redirect()->route( 'module.index' );
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
		$code   = $request->query( 'code' );
		$module = $this->module->edit( $id );

		$data = json_decode( $module->setting, true );

		$form       = "module-form";
		$data['id'] = $id;

		$data['page_title']  = "Modules";
		$data['code']        = $code;
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'module.index', 'title' => 'Modules', 'active' => false ),
			array( 'router' => 'layout.index', 'title' => 'Create module', 'active' => true ),
		);
		$data['action']      = route( 'module.update', [ 'id' => $id ] );
		$data['actions']     = [
			array(
				'className' => "btn btn-primary save-form",
				'form'      => $form,
				'text'      => 'Save',
				'id'        => '',
				'tag'       => 'button'
			),
		];

		$data['form'] = $form;

		$data['statusOptions'] = ['Enable', 'Disable'];
		$data['type'] = ['gallery', 'gallery-column'];

		return view( 'admin.modules.form.' . $code, [ 'data' => $data ] );
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
		$data = $request->input( 'module' );
		$this->module->update( $data, $id );

		return redirect()->route( 'module.index' );
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		$this->module->destroy( $id );

		return redirect()->route( 'module.index' );
	}
}

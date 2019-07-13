<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slide;
use App\Services\SlideService;
use Validator;
class SlideController extends Controller
{
    protected $_slideService;

	public function __construct( SlideService $slideService ) {
		$this->_slideService = $slideService;
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['slides'] = $this->_slideService->index();
		$data['page_title']  = "Hotels";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'slide.index', 'title' => 'Hotels', 'active' => true ),
		);
		$data['actions']     = [
			array(
				'className' => "btn btn-primary",
				'text'      => 'New Slide',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route( 'slide.create' )
			)
		];
		return view( 'admin.slide.index' )->with( 'data', $data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form              = "slide-form";
		$data['page_title']  = "Create slide";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'slide.index', 'title' => 'Slide', 'active' => true ),
		);
		$data['action']      = route( 'slide.store' );
		$data['form']        = $form;

		$data['actions'] = [
			array(
				'className' => "btn btn-default",
				'text'      => 'Back',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route( 'slide.index' )
			),
			array(
				'className' => "btn btn-primary save-form",
				'form'      => $form,
				'text'      => 'Save',
				'id'        => '',
				'tag'       => 'button'
			),
		];

		// Init data
		$slide = array(
			'image'      => null,
			'images'     => '[]',
			'sort_order' => null,
			'status' => false,
		);
		$data['status'] = "";
		$images = '[]';
		return view( 'admin.slide.slide', compact( 'data', 'images', 'slide') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate( [
			'slide.image.*'              => 'required',
			'slide.title.*'              => 'required',
			'slide.status.*'              => 'required',
		]);
		
		$this->_slideService->store( $request->slide );

		return redirect()->route( 'slide.index' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data['slide'] = $this->_slideService->edit( $id );
        $form = "slide_form";
        $data['id'] = $id;
        $data['page_title']  = "Edit Slide";
        $data['breadcrumbs'] = array(
            array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
            array( 'router' => 'slide.index', 'title' => 'Edit slide', 'active' => true ),
        );
        $data['action']      = route( 'slide.update', [ 'id' => $id ] );
        $data['form']        = $form;

        $data['actions'] = [
            array(
                'className' => "btn btn-default",
                'text'      => 'Back',
                'id'        => '',
                'tag'       => 'a',
                'href'      => route( 'slide.index' )
            ),
            array(
                'className' => "btn btn-primary save-form",
                'form'      => $form,
                'text'      => 'Save',
                'id'        => '',
                'tag'       => 'button'
            ),
		];
		return view( 'admin.slide.slide', compact( 'data' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate( [
			'slide.image.*'              => 'required',
			'slide.title.*'              => 'required',
			'slide.status.*'              => 'required',
		]);
        $data = $request->slide;
		$this->_slideService->update( $data[0], $id );
		return redirect()->route( 'slide.index' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->_slideService->destroy( $id );
		return redirect()->route( 'slide.index' )->with( 'success', $data );
    }
}

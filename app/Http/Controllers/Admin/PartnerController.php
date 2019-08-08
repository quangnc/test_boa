<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\PartnerService;
use Validator;
class PartnerController extends Controller
{
    protected $_partnerService;

	public function __construct( PartnerService $partnerService ) {
		$this->_partnerService = $partnerService;
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['partners'] = $this->_partnerService->index();
		$data['page_title']  = "Hotels";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'partner.index', 'title' => 'Hotels', 'active' => true ),
		);
		$data['actions']     = [
			array(
				'className' => "btn btn-primary",
				'text'      => 'New Partner',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route( 'partner.create' )
			)
		];
		return view( 'admin.partner.index' )->with( 'data', $data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form              = "partner-form";
		$data['page_title']  = "Create partner";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'partner.index', 'title' => 'Partner', 'active' => true ),
		);
		$data['action']      = route( 'partner.store' );
		$data['form']        = $form;

		$data['actions'] = [
			array(
				'className' => "btn btn-default",
				'text'      => 'Back',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route( 'partner.index' )
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
		$partner = array(
			'image'      => null,
			'images'     => '[]',
			'sort_order' => null,
			'status' => false,
		);
		$data['status'] = "";
		$images = '[]';
		return view( 'admin.partner.partner', compact( 'data', 'images', 'partner') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate( [
			'partner.image.*'              => 'required',
			'partner.title.*'              => 'required',
			'partner.status.*'              => 'required',
		]);
		
		$this->_partnerService->store( $request->partner );

		return redirect()->route( 'partner.index' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data['partner'] = $this->_partnerService->edit( $id );
        $form = "partner_form";
        $data['id'] = $id;
        $data['page_title']  = "Edit Partner";
        $data['breadcrumbs'] = array(
            array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
            array( 'router' => 'partner.index', 'title' => 'Edit partner', 'active' => true ),
        );
        $data['action']      = route( 'partner.update', [ 'id' => $id ] );
        $data['form']        = $form;

        $data['actions'] = [
            array(
                'className' => "btn btn-default",
                'text'      => 'Back',
                'id'        => '',
                'tag'       => 'a',
                'href'      => route( 'partner.index' )
            ),
            array(
                'className' => "btn btn-primary save-form",
                'form'      => $form,
                'text'      => 'Save',
                'id'        => '',
                'tag'       => 'button'
            ),
		];
		return view( 'admin.partner.partner', compact( 'data' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate( [
			'partner.image.*'              => 'required',
			'partner.title.*'              => 'required',
			'partner.status.*'              => 'required',
		]);
        $data = $request->partner;
		$this->_partnerService->update( $data[0], $id );
		return redirect()->route( 'partner.index' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->_partnerService->destroy( $id );
		return redirect()->route( 'partner.index' )->with( 'success', $data );
    }
}

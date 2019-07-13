<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ContactService;
use Validator;
class ContactController extends Controller
{
    protected $_contactService;

    public function __construct( ContactService $contactService ) {
        $this->_contactService = $contactService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->_contactService->index();
        return view( 'admin.contact.contact-list', compact( 'data' ));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->_contactService->show($id);
        $updateRead = $this->_contactService->updateRead($id);
        return view( 'admin.contact.contact-show', compact( 'data' ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->_contactService->destroy( $id );
        return redirect( '/dashboard/admin-contact' )->with( 'success', $data );
    }

    public function contactCount()
    {
        $data =  $this->_contactService->contactCount();
        return view('admin.navigation-top', compact( 'data' ));
    }
}

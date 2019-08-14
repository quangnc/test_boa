<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ContactService;

class DashboardController extends Controller {
	protected $_contactService;

	public function __construct( ContactService $contactService ) {
		$this->_contactService = $contactService;
	}

	public function index() {
		$data = $this->_contactService->contactCount();
		return view( 'admin.dashboard.index', compact( 'data') );
	}

}

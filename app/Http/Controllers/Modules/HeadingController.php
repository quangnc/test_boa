<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;

class HeadingController extends Controller {
	public function index( $data ) {
		$setting = json_decode($data->setting);
		return view( 'modules.heading' )->with( 'data', $setting );
	}
}
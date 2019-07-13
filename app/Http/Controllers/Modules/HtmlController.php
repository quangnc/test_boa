<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;

class HtmlController extends Controller {
	public function index( $data ) {
		$setting = json_decode($data->setting);
		return view( 'modules.html' )->with( 'html', $setting->html );
	}
}
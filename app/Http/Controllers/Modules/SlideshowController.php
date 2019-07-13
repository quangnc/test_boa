<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;

class SlideshowController extends Controller {
	public function index( $data ) {
		$setting = json_decode($data->setting);
		$images = array_values($setting->images);
		return view( 'modules.slideshow' )->with( 'data', $images );
	}
}
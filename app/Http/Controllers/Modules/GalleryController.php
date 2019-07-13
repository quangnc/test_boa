<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use Helper;
class GalleryController extends Controller {

	public function index($data) {
		$setting = json_decode($data->setting);
		$name_gallery = $setting->code;
		$images = [];
		foreach($setting->images as $image) {
			$images[] = array(
				'thumb' => Helper::resize($image->image, 400, 400),
				'image' => $image->image,
				'title' => $image->title
			);
		}
		
		return view( 'modules.gallery', compact('name_gallery', 'images') );
	}
}
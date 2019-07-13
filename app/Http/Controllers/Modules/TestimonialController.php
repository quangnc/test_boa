<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;

class TestimonialController extends Controller {
	public function index( $d ) {
		$setting = json_decode($d->setting);
		$testimonials = [];
		$name_testimonial = $setting->code;
		foreach($setting->testimonial as $testimonial) {
			$testimonials[] = array(
				'review' => $testimonial->review,
				'client' => $testimonial->client
			);
		}
		$data['name_testimonial'] = $name_testimonial;
		$data['testimonials'] = $testimonials;
		
		return view( 'modules.testimonial')->with('data', $data);
	}
}
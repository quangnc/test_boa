<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class SettingController extends Controller {
	public function setLanguage( $id ) {
		session( [ 'language' => $id ] );

		return Redirect::back();
	}

	public function setCurrency( $code ) {
		session( [ 'currency' => $code ] );

		return Redirect::back();
	}
}

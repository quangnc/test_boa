<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class LoginController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	// public function index() {
	// 	if ( ! Auth::check() ) {
	// 		return view( 'auth.login' );
	// 	} else {
	// 		return redirect()->back();
	// 	}
	// }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	// public function store( Request $request ) {
	// 	$rules     = [
	// 		'txtEmail'    => 'required',
	// 		'txtPassword' => 'required'
	// 	];
	// 	$messages  = [
	// 		'txtEmail.required'    => 'Username là trường bắt buộc',
	// 		'txtPassword.required' => 'Mật khẩu là trường bắt buộc',
	// 	];
	// 	$remember  = $request->remember ? true : false;
	// 	$validator = Validator::make( $request->all(), $rules, $messages );
	// 	if ( $validator->fails() ) {
	// 		return redirect()->back()->withErrors( $validator )->withInput();
	// 	} else {
	// 		$data = [
	// 			'email'    => $request->txtEmail,
	// 			'password' => $request->txtPassword,
	// 		];
	// 		if ( Auth::attempt( $data, $remember ) ) {
	// 			return redirect()->route( 'getDashboard' );
	// 		} else {
	// 			$errors = new MessageBag( [ 'errorlogin' => 'Email hoặc mật khẩu không đúng' ] );

	// 			return redirect()->back()->withInput()->withErrors( $errors );
	// 		}
	// 	}

	// }

	public function logout() {
		Auth::logout();
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class RigistrationController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		
		$data['pageClass'] = "html not-front not-logged-in no-sidebars page-node page-node-add page-node-add-dang-ky i18n-vi adminimal-theme jquery-once-1-processed mq-desktop";
        return view('frontpage.registration-full', compact('data'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		
		return view( 'admin.blog.blog-post.blog-post-form', compact( 'data', 'blog_post_categories' ) );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {
		
		return redirect()->route( 'blog-post.index' );
	}
}

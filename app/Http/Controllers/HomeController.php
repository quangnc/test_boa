<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pageClass'] = "html front not-logged-in no-sidebars page-node i18n-vi adminimal-theme ";
        return view('frontpage.home', compact('data'));
    }

    public function contact() {
	    return view('frontpage.contact-us');
    }
}

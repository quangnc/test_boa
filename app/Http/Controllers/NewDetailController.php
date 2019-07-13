<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewDetailController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pageClass'] = "html not-front not-logged-in no-sidebars page-node page-node- page-node-18544 node-type-tintuc i18n-vi adminimal-theme page-views page-views page-views jquery-once-1-processed mq-desktop";
        return view('frontpage.new-detail', compact('data'));
    }
}

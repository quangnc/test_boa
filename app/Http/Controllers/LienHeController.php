<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LienHeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pageClass'] = "html not-front not-logged-in no-sidebars page-node page-node- page-node-49 node-type-webform i18n-vi adminimal-theme jquery-once-1-processed mq-desktop";
        return view('frontpage.lien-he', compact('data'));
    }
}

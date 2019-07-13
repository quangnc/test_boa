<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;

use App\Models\Slide;
// use App\Models\BlogPost;

class SlideRepository implements CRUDInterface {
    use ConfigSetting;

    public function index() 
    {
		return Slide::all();
    }
    
    public function edit( $id ) 
    {
        $slide = Slide::find($id);
        
		return array($slide);
    }

}
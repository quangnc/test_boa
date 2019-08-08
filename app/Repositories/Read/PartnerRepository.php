<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;

use App\Models\Partner;
// use App\Models\BlogPost;

class PartnerRepository implements CRUDInterface {
    use ConfigSetting;

    public function index() 
    {
		return Partner::all();
    }
    
    public function edit( $id ) 
    {
        $partner = Partner::find($id);
        
		return array($partner);
    }

}
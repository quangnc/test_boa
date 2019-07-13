<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;
use App\Models\CruiseReview;
class CruiseReviewRepository implements CRUDInterface {

    public function index() 
    {
        return CruiseReview::all();
    }

    public function edit( $id ) {
        return CruiseReview::find($id);
    }
    
}
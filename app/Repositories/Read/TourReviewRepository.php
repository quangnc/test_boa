<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;
use App\Models\TourReview;
class TourReviewRepository implements CRUDInterface {

    public function index() 
    {
        return TourReview::all();
    }

    public function edit( $id ) {
        return TourReview::find($id);
    }
    
}
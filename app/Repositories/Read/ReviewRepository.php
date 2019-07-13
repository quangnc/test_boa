<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;
use App\Models\Review;
class ReviewRepository implements CRUDInterface {

    public function index() 
    {
        return Review::all();
    }

    public function edit( $id ) {
        return Review::find($id);
    }
    
}
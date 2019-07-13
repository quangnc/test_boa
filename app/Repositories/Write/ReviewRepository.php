<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;
use DB;
use App\Models\Review;
class ReviewRepository implements CRUDInterface {
    public function store($data) 
    {
        DB::beginTransaction();
		try {
            $review = new Review();
			$data_review = (array) $data['review'];
			foreach ( $data_review as $key => $value ) {
				$review->$key = $value;
            }
            $review->save();
            DB::commit();
		} catch ( Exception $ex ) {
			DB::rollBack();

			return false;
		}
    }

    public function update( $data, $id ) {
        DB::beginTransaction();
		try {
            $review             = Review::find( $id );
			$data_review = (array) $data['review'];
            foreach ( $data_review as $key => $value ) {
				$review->$key = $value;
			}
            $review->save();
            DB::commit();
        } catch ( Exception $ex ) {
            DB::rollBack();
            return false;
        }
        
    }

    public function destroy( $id ) {
        $review = Review::find( $id )->delete();
        return "Information has been  deleted";
    }
}
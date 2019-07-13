<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;
use DB;
use App\Models\TourReview;
class TourReviewRepository implements CRUDInterface {
    public function store($data) 
    {
        DB::beginTransaction();
		try {
            $tour_review = new TourReview();
			$data_tour_review = (array) $data['tour_review'];
			foreach ( $data_tour_review as $key => $value ) {
				$tour_review->$key = $value;
            }
            $tour_review->save();
            DB::commit();
		} catch ( Exception $ex ) {
			DB::rollBack();

			return false;
		}
    }

    public function update( $data, $id ) {
        DB::beginTransaction();
		try {
            $tour_review             = TourReview::find( $id );
			$data_tour_review = (array) $data['tour_review'];
            foreach ( $data_tour_review as $key => $value ) {
				$tour_review->$key = $value;
			}
            $tour_review->save();
            DB::commit();
        } catch ( Exception $ex ) {
            DB::rollBack();
            return false;
        }
        
    }

    public function destroy( $id ) {
        $tour_review = TourReview::find( $id )->delete();
        return "Information has been  deleted";
    }
}
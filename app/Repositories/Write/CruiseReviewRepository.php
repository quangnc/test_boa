<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;
use DB;
use App\Models\CruiseReview;
class CruiseReviewRepository implements CRUDInterface {
    public function store($data) 
    {
        DB::beginTransaction();
		try {
            $cruise_review = new CruiseReview();
			$data_cruise_review = (array) $data['cruise_review'];
			foreach ( $data_cruise_review as $key => $value ) {
				$cruise_review->$key = $value;
            }
            $cruise_review->save();
            DB::commit();
		} catch ( Exception $ex ) {
			DB::rollBack();

			return false;
		}
    }

    public function update( $data, $id ) {
        DB::beginTransaction();
		try {
            $cruise_review             = CruiseReview::find( $id );
			$data_cruise_review = (array) $data['cruise_review'];
            foreach ( $data_cruise_review as $key => $value ) {
				$cruise_review->$key = $value;
			}
            $cruise_review->save();
            DB::commit();
        } catch ( Exception $ex ) {
            DB::rollBack();
            return false;
        }
        
    }

    public function destroy( $id ) {
        $cruise_review = CruiseReview::find( $id )->delete();
        return "Information has been  deleted";
    }
}
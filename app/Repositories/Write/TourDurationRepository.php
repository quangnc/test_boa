<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;

use App\Models\TourDuration;
use App\Models\TourDurationDescription;
use DB;
class TourDurationRepository implements CRUDInterface {
    public function store($data) 
    {
        DB::beginTransaction();
		try {
            $tour_duration = new TourDuration();
			$data_tour_duration = (array) $data['tour_duration'];
			foreach ( $data_tour_duration as $key => $value ) {
				$tour_duration->$key = $value;
			}
            if($tour_duration->save()) {
                if ( $data['tour_duration_descriptions'] ) {
                    $tour_duration->tour_duration_descriptions()->createMany( $data['tour_duration_descriptions'] );
                }
            }
            DB::commit();
		} catch ( Exception $ex ) {
			DB::rollBack();

			return false;
		}
    }

    public function update( $data, $id ) {
        DB::beginTransaction();
		try {
            $tour_duration             = TourDuration::find( $id );
			$data_tour_duration = (array) $data['tour_duration'];
            foreach ( $data_tour_duration as $key => $value ) {
				$tour_duration->$key = $value;
			}
            if($tour_duration->save()) {
                if ( $data['tour_duration_descriptions'] ) {
                    $tour_duration->tour_duration_descriptions()->delete();
                    $tour_duration->tour_duration_descriptions()->createMany( $data['tour_duration_descriptions'] );
                }
            }
            DB::commit();
        } catch ( Exception $ex ) {
            DB::rollBack();
            return false;
        }
        
    }

    public function destroy( $id ) {
        $tour_duration = Tourduration::find( $id );
        if ( $tour_duration ) {
            $tour_duration_descriptions = $tour_duration->tour_duration_descriptions()->delete();
            $tour_duration->delete();
        }

        return "Information has been  deleted";
    }
}
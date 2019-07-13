<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;

use App\Models\TourType;
use App\Models\TourTypeDescription;
use DB;
class TourTypeRepository implements CRUDInterface {
    public function store($data) 
    {
        DB::beginTransaction();
		try {
            $tour_type = new TourType();
			$data_tour_type = (array) $data['tour_type'];
			foreach ( $data_tour_type as $key => $value ) {
				$tour_type->$key = $value;
			}
            if($tour_type->save()) {
                if ( $data['tour_type_descriptions'] ) {
                    $tour_type->tour_type_descriptions()->createMany( $data['tour_type_descriptions'] );
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
            $tour_type             = TourType::find( $id );
			$data_tour_type = (array) $data['tour_type'];
            foreach ( $data_tour_type as $key => $value ) {
				$tour_type->$key = $value;
			}
            if($tour_type->save()) {
                if ( $data['tour_type_descriptions'] ) {
                    $tour_type->tour_type_descriptions()->delete();
                    $tour_type->tour_type_descriptions()->createMany( $data['tour_type_descriptions'] );
                }
            }
            DB::commit();
        } catch ( Exception $ex ) {
            DB::rollBack();
            return false;
        }
        
    }

    public function destroy( $id ) {
        $tour_type = TourType::find( $id );
        if ( $tour_type ) {
            $tour_type_descriptions = $tour_type->tour_type_descriptions()->delete();
            $tour_type->delete();
        }

        return "Information has been  deleted";
    }
}
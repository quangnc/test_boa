<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;
use App\Models\Facility;
use App\Models\FacilityDescription;
use DB;
class RoomFacilityRepository implements CRUDInterface {
    public function store($data) 
    {
        DB::beginTransaction();
		try {
            $facility = new Facility();
            $data_facility  = (array) $data['facility'];
            foreach($data_facility as $key => $value) {
                $facility->$key = $value;
            }
            if($facility->save()) {
                if( $data['facility_descriptions'] ) {
                    $facility->facility_descriptions()->createMany( $data['facility_descriptions'] );
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
            $facility            = Facility::find( $id );
            $data_facility = (array) $data['facility'];
            foreach ( $data_facility as $key => $value ) {
                $facility->$key = $value;
            }
            if($facility->save()) {
                // Update room facility description
                if ( $data['facility_descriptions'] ) {
                    $facility->facility_descriptions()->delete();
                    $facility->facility_descriptions()->createMany( $data['facility_descriptions'] );
                }
            }
        DB::commit();
		} catch ( Exception $ex ) {
			DB::rollBack();

			return false;
		}
    }

     public function destroy( $id ) {
        $property_facility = Facility::find( $id );
        if ( $property_facility ) {
            $property_facility_descriptions = $property_facility->facility_descriptions()->delete();
            $property_facility->delete();
        }

        return "Information has been  deleted";
    }
}
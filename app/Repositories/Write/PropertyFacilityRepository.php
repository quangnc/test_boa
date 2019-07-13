<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;
use App\Models\PropertyFacility;
use App\Models\PropertyFacilityDescription;
use DB;
class PropertyFacilityRepository implements CRUDInterface {
    
    public function store($data) 
    {
        DB::beginTransaction();
		try {
            $facility = new PropertyFacility();
            $data_facility  = (array) $data['property_facility'];
            foreach($data_facility as $key => $value) {
                $facility->$key = $value;
            }
            if($facility->save()) {
                if( $data['property_facility_descriptions'] ) {
                    $facility->property_facility_descriptions()->createMany( $data['property_facility_descriptions'] );
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
            $facility = PropertyFacility::find( $id );
            $data_facility  = (array) $data['property_facility'];
            foreach($data_facility as $key => $value) {
                $facility->$key = $value;
            }
            if($facility->save()) {
                if( $data['property_facility_descriptions'] ) {
                    $facility->property_facility_descriptions()->delete();
                    $facility->property_facility_descriptions()->createMany( $data['property_facility_descriptions'] );
                }
            }
            DB::commit();
		} catch ( Exception $ex ) {
			DB::rollBack();
			return false;
		}
    }

     public function destroy( $id ) {
        $property_facility = PropertyFacility::find( $id );
        if ( $property_facility ) {
            $property_facility_descriptions = $property_facility->property_facility_descriptions()->delete();
            $property_facility->delete();
        }

        return "Information has been  deleted";
    }
}
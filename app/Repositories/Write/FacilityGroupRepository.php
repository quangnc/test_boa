<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\FacilityGroupRepositoryInterface;
use App\Models\PropertyFacilityGroup;
use App\Models\PropertyFacilityGroupDescription;
class FacilityGroupRepository implements FacilityGroupRepositoryInterface {

    public static function create( $request ) {
        $property_facility_group = new PropertyFacilityGroup();
        $property_facility_group->sort_order = $request->sort_order;
        if( $property_facility_group->save() ) {
            if( $request->facility_group ) {
                $facility_group = $request->facility_group;
                foreach( $facility_group as $key => $facility_group ) {
                    $property_facility_group_descripton = new PropertyFacilityGroupDescription();
                    $property_facility_group_descripton->property_facility_group_id = $property_facility_group->property_facility_group_id;
                    $property_facility_group_descripton->language_id = $key;
                    $property_facility_group_descripton->name = $facility_group['name'];
                    $property_facility_group_descripton->save();
                }
            }
        }
    }

    public static function update( $request, $id ) {
        $property_facility_group             = PropertyFacilityGroup::find( $id );
        $property_facility_group->sort_order = $request->sort_order;
        
        if($property_facility_group->save()) {
            foreach ( $request->facility_group as $key => $facility_group ) {
				PropertyFacilityGroupDescription::where( 'property_facility_group_id', $id )
                                                ->where( 'language_id', $key )
                                                ->update( [
                                                    'name'             => $facility_group['name'],
                                                ] );
			}
        }
    }

    public static function destroy( $id ) {
        $property_facility_group = PropertyFacilityGroup::find( $id );
		if ( $property_facility_group ) {
            $property_facility_group_descriptions = $property_facility_group->property_facility_group_descriptions()->delete();
            $property_facility_group->delete();
		}

		return "Information has been  deleted";
    }


}
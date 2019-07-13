<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\FacilityGroupRepositoryInterface;
use App\Models\PropertyFacilityGroup;
use App\Models\PropertyFacilityGroupDescription;
class FacilityGroupRepository implements FacilityGroupRepositoryInterface {
	
    public static function index() {
		$property_facility_group         = PropertyFacilityGroup::all();
		$data['property_facility_group'] = [];
		foreach ( $property_facility_group as $property_facility_group ) {
			$property_facility_group_description = PropertyFacilityGroupDescription::where('property_facility_group_id', $property_facility_group->property_facility_group_id);
			$property_facility_group_description = $property_facility_group_description->where('language_id', 1)->first();
			
			if($property_facility_group_description) {
				$data['property_facility_group'][] = array(
					'id'         => $property_facility_group->property_facility_group_id,
					'name'     => $property_facility_group_description->name,
					'sort_order' => $property_facility_group->sort_order,
				);
			}
		}

		return $data;
			
	}

	public static function edit( $id ) {
		return PropertyFacilityGroup::find($id);
	}
	
}
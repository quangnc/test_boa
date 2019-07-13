<?php
/**
 * Created by PhpStorm.
 * User: dangtienngoc
 * Date: 7/18/18
 * Time: 5:44 PM
 */

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;

use App\Models\PropertyFacilityGroup;

class PropertyFacilityGroupRepository implements CRUDInterface {
	public function store( $data ) {
		$property_facility_group             = new PropertyFacilityGroup();

		$property_facility_group_attributes = (array) $data['property_facility_group'];
		foreach ( $property_facility_group_attributes as $key => $value ) {
			$property_facility_group->$key = $value;
		}

		$hasSave = $property_facility_group->save();
		if ( $hasSave ) {
			$property_facility_group->property_facility_group_descriptions()->createMany( $data['property_facility_group_descriptions'] );
		}

		return $hasSave;
	}

	public function update( $data, $id ) {
		$property_facility_group = PropertyFacilityGroup::find($id);

		$property_facility_group_attributes = (array) $data['property_facility_group'];
		foreach ( $property_facility_group_attributes as $key => $value ) {
			$property_facility_group->$key = $value;
		}

		$hasSave = $property_facility_group->save();

		if ( $hasSave ) {
			if ( $property_facility_group->property_facility_group_descriptions ) {
				$property_facility_group->property_facility_group_descriptions()->delete();
				$property_facility_group->property_facility_group_descriptions()->createMany( $data['property_facility_group_descriptions'] );
			}
		}

		return $hasSave;
	}

	public function destroy( $id ) {
		$property_facility_group = PropertyFacilityGroup::find( $id );

		if ($property_facility_group && $property_facility_group->property_facility_group_descriptions) {
			$property_facility_group->property_facility_group_descriptions()->delete();
		}

		return $property_facility_group->delete();
	}

}
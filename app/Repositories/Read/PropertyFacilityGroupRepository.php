<?php
/**
 * Created by PhpStorm.
 * User: dangtienngoc
 * Date: 7/18/18
 * Time: 5:22 PM
 */

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;
use App\Models\PropertyFacilityGroup;

class PropertyFacilityGroupRepository implements CRUDInterface {

	use ConfigSetting;

	public function index() {
		$property_facility_groups = PropertyFacilityGroup::all();
		$data                     = array();
		foreach ( $property_facility_groups as $property_facility_group ) {
			$property_facility_group_description = $property_facility_group->property_facility_group_descriptions->where( 'language_id', $this->adminLanguage() )->first();
			$data[] = array(
				'id'         => $property_facility_group->property_facility_group_id,
				'sort_order' => $property_facility_group->sort_order,
				'name'       => $property_facility_group_description->name,
			);
		}

		return $data;
	}

	public function edit( $id ) {
		$data = array();
		$property_facility_group = PropertyFacilityGroup::find( $id );
		$data['property_facility_group'] = $property_facility_group;

		$property_facility_group_descriptions = array();
		foreach ( $property_facility_group->property_facility_group_descriptions as $property_facility_group_description ) {
			$property_facility_group_descriptions[ $property_facility_group_description->language_id ] = $property_facility_group_description;
		}
		$data['property_facility_group_descriptions'] = $property_facility_group_descriptions;
		return $data;
	}

}
<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;
use App\Models\PropertyFacilityGroup;
use App\Models\PropertyFacilityGroupDescription;
use App\Models\PropertyFacilityDescription;
use App\Models\PropertyFacility;
class PropertyFacilityRepository implements CRUDInterface {

	use ConfigSetting;

    public function index()
    {
        $property_facility  = PropertyFacilityDescription::with('property_facility')
                                                                    ->where('language_id', $this->adminLanguage())
                                                                    ->get();
        $data['property_facility'] = [];
        if($property_facility) {
            foreach ($property_facility as $key => $property_facility) {
                $facility_group_id = $property_facility->property_facility->property_facility_group_id;
                $property_facility_group = PropertyFacilityGroupDescription::where('property_facility_group_id', $facility_group_id)
                                                                            ->where('language_id', $this->adminLanguage())
                                                                            ->first();
                $data['property_facility'][] = array(
                    'id' => $property_facility->property_facility_id,
                    'property_facility_name' => $property_facility->name,
                    'property_facility_group_name' => $property_facility_group->name,
                    'sort_order' => $property_facility->property_facility->sort_order
                );

            }
        }
        return $data;
    }

    public function listPropertyFacilityGroup()
    {
        $property_facility_group = PropertyFacilityGroupDescription::with('property_facility_group')
                                                                    ->where('language_id', $this->adminLanguage())
                                                                    ->get();
        return $property_facility_group;
    }

    public function edit( $id ) {
        $data = array();
		$property_facility = PropertyFacility::find( $id );
		$data['property_facility'] = $property_facility;
		$property_facility_descriptions = array();
		foreach ( $property_facility->property_facility_descriptions as $property_facility_description ) {
			$property_facility_descriptions[ $property_facility_description->language_id ] = $property_facility_description;
		}
        $data['property_facility_descriptions'] = $property_facility_descriptions;
        return $data;
    }
}
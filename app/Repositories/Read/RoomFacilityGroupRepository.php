<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;
use App\Models\FacilityGroup;
use App\Models\FacilityGroupDescription;
class RoomFacilityGroupRepository implements CRUDInterface {

	use ConfigSetting;

    public function index() {
		$facility_group         = FacilityGroup::all();
		$data = [];
		foreach ( $facility_group as $facility_group ) {
			$facility_group_description = $facility_group->facility_group_descriptions()->where('language_id', $this->adminLanguage())->first();
			if($facility_group_description) {
				$data[] = array(
					'id'         => $facility_group->facility_group_id,
					'name'     => $facility_group_description->name,
					'sort_order' => $facility_group->sort_order,
				);
			}
		}

		return $data;
			
	}

	public function edit( $id ) {
		$data = [];
		$facility_group = FacilityGroup::find($id);
		$facility_group_descriptions = array();
		foreach($facility_group->facility_group_descriptions as $facility_group_description) {
			$facility_group_descriptions[$facility_group_description->language_id] = $facility_group_description;
		}
		$data['facility_groups'] = $facility_group;
		$data['facility_group_descriptions'] = $facility_group_descriptions;
		return $data;
	}
	
}
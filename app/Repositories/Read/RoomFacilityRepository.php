<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;
use App\Models\FacilityGroup;
use App\Models\FacilityGroupDescription;
use App\Models\FacilityDescription;
use App\Models\Facility;
class RoomFacilityRepository implements CRUDInterface {

	use ConfigSetting;

    public function index()
    {
        $facilityDescription  = FacilityDescription::with('facility')
                                                 ->where('language_id', $this->adminLanguage())
                                                 ->get();
        $data = [];
        if($facilityDescription) {
            foreach ($facilityDescription as $key => $facility) {
                $facility_group_id = $facility->facility->facility_group_id;
                $facility_group = FacilityGroupDescription::where('facility_group_id', $facility_group_id)
                                                                   ->where('language_id', $this->adminLanguage())
                                                                   ->first();
                $data[] = array(
                    'id' => $facility->facility_id,
                    'facility_name' => $facility->name,
                    'facility_group_name' => $facility_group->name,
                    'sort_order' => $facility->facility->sort_order
                );
            }
        }
        return $data;
    }

    public function listFacilityGroup()
    {
        $facility_group_descriptions= FacilityGroupDescription::with('facility_group')
                                                           ->where('language_id', $this->adminLanguage())
                                                           ->get();
        return $facility_group_descriptions;
    }

    public function edit( $id ) 
    {
        $facility = Facility::find($id);
        $facility_group_descriptions =  FacilityGroupDescription::where('language_id', $this->adminLanguage())
                                                            ->get();
        $facility_descriptions = [];
		if ( $facility->facility_descriptions ) {
			foreach ( $facility->facility_descriptions as $description ) {
				$facility_descriptions[ $description->language_id ] = $description;
			}
        }
        
        $data['facility_group_id'] = $facility->facility_group_id;
        $data['facility_descriptions'] = $facility_descriptions;
        $data['facility_group_descriptions'] = $facility_group_descriptions;
        $data['facility'] =  $facility;
        return $data;
    }
}
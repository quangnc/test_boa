<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;
use App\Models\BedType;
use App\Models\BedTypeDescription;
class RoomBedTypeRepository implements CRUDInterface {

	use ConfigSetting;

    public function index() 
    {
        $data['bed_type'] = [];
        $bed_type_descriptions = BedTypeDescription::with('bed_type')
                                        ->where('language_id', $this->adminLanguage())
                                        ->get();
        if($bed_type_descriptions) {
            foreach($bed_type_descriptions as $bed_type_descriptions) {
               $bed_type = $bed_type_descriptions->bed_type;
               $data['bed_type'][] = array(
                'id' => $bed_type->bed_type_id,
                'bed_type_name' => $bed_type_descriptions->name,
                'sort_order' => $bed_type->sort_order
            );
            }
        }
        return $data;
    }

    public function edit( $id ) 
    {
        $data = [];
        $bed_type = BedType::find($id);
		$bed_type_descriptions = [];
		foreach($bed_type->bed_type_descriptions as $bed_type_description) {
			$bed_type_descriptions[$bed_type_description->language_id] = $bed_type_description;
		}
		$data['bed_type'] = $bed_type;
		$data['bed_type_descriptions'] = $bed_type_descriptions;
		return $data;
    }
    
}
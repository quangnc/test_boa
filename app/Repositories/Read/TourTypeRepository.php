<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;
use App\Models\TourType;
use App\Models\TourTypeDescription;
class TourTypeRepository implements CRUDInterface {

	use ConfigSetting;

    public function index() 
    {
        $data = [];

        $data = [];
        $tour_types = TourType::all();
        if( $tour_types) {
            foreach( $tour_types as $tour_type ) {
                $tour_type_description = $tour_type->tour_type_descriptions()
                                                            ->where('language_id', $this->adminLanguage())
                                                            ->first();
                $data[] = array(
                    'tour_types' => $tour_type,
                    'tour_type_descriptions' => $tour_type_description
                );                                            
            }
        }
        return $data;
    }

    

    public function edit( $id ) {
        $tour_type = TourType::find($id);
        $data = [];
        $descriptions = [];
		if ( $tour_type->tour_type_descriptions ) {
			foreach ( $tour_type->tour_type_descriptions as $description ) {
				$descriptions[ $description->language_id ] = $description;
			}
        }
        $data['tour_type'] = $tour_type;
        $data['tour_type_descriptions'] = $descriptions;
        return $data;
    }
    
}
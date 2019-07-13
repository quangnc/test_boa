<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;
use App\Models\TourDuration;
use App\Models\TourDurationDescription;
class TourDurationRepository implements CRUDInterface {

	use ConfigSetting;

    public function index() 
    {
        $data = [];
        $tour_duration_descriptions = TourDurationDescription::with('tour_duration')
                                        ->where('language_id', $this->adminLanguage())
                                        ->get();
        if($tour_duration_descriptions) {
            foreach($tour_duration_descriptions as $tour_duration_descriptions) {
               $tour_duration = $tour_duration_descriptions->tour_duration;
               $data[] = array(
                'id' => $tour_duration->tour_duration_id,
                'tour_duration_name' => $tour_duration_descriptions->name,
                'sort_order' => $tour_duration->sort_order
            );
            }
        }
        return $data;
    }

    public function edit( $id ) {
        $tour_duration = TourDuration::find($id);
        $data = [];
        $descriptions = [];
		if ( $tour_duration->tour_duration_descriptions ) {
			foreach ( $tour_duration->tour_duration_descriptions as $description ) {
				$descriptions[ $description->language_id ] = $description;
			}
        }
        $data['tour_duration'] = $tour_duration;
        $data['tour_duration_descriptions'] = $descriptions;
        return $data;
    }
    
}
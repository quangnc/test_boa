<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;
use App\Models\Destination;
use App\Models\DestinationDescription;
class DestinationRepository implements CRUDInterface {

	use ConfigSetting;

    public function index() 
    {
        $data = [];
        $destination_descriptions = DestinationDescription::with('destination')
                                        ->where('language_id', $this->adminLanguage())
                                        ->get();
        if($destination_descriptions) {
            foreach($destination_descriptions as $destination_descriptions) {
               $destination = $destination_descriptions->destination;
               $data[] = array(
                'id' => $destination->destination_id,
                'destination_name' => $destination_descriptions->name,
                'sort_order' => $destination->sort_order
            );
            }
        }
        return $data;
    }

    public function edit( $id ) {
        $destination = Destination::find($id);
        $data = [];
        $descriptions = [];
		if ( $destination->destination_descriptions ) {
			foreach ( $destination->destination_descriptions as $description ) {
				$descriptions[ $description->language_id ] = $description;
			}
        }
        $data['destination'] = $destination;
        $data['destination_descriptions'] = $descriptions;
        return $data;
    }
    
}
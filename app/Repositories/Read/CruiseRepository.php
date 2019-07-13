<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;
use App\Models\Cruise;
use App\Models\CruiseDuration;
use App\Models\Destination;

class CruiseRepository implements CRUDInterface {

	use ConfigSetting;

    public function listDestinations()
    {
        $data = [];
        $destinations = Destination::all();
        if( $destinations) {
            foreach( $destinations as $destination ) {
                $destination_description = $destination->destination_descriptions()
                                                            ->where('language_id', $this->adminLanguage())
                                                            ->first();
                $data[] = array(
                    'destination' => $destination,
                    'destination_description' => $destination_description
                );                                            
            }
        }
        return $data;
    }

    public function index() 
    {
        $data = [];
        $cruises = Cruise::all();
        foreach($cruises as $cruise) {
            $cruise_descriptions = $cruise->cruise_descriptions->where('language_id', $this->adminLanguage())->first();
            $data[] = array(
                'cruise' => $cruise,
                'cruise_descriptions' => $cruise_descriptions,
            );
        }
        return $data;
    }

    public function edit( $id ) 
    {
        $data = [];
		$cruise = Cruise::find($id);
        $cruise_descriptions = [];
        if($cruise->cruise_descriptions) {
            foreach($cruise->cruise_descriptions as $cruise_description) {
                $cruise_descriptions[$cruise_description->language_id] = $cruise_description;
            }
        }
        
		$data['cruise'] = $cruise;
        $data['cruise_descriptions'] = $cruise_descriptions;
		return $data;
    }
}
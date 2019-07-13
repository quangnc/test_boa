<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;
use App\Models\Tour;
use App\Models\TourTypeDescription;
use App\Models\TourType;
use App\Models\TourDuration;
use App\Models\Destination;

class TourRepository implements CRUDInterface {

	use ConfigSetting;

    public function listTourTypes()
    {
        $data = [];
        $tour_types = TourType::all();
        if( $tour_types) {
            foreach( $tour_types as $tour_type ) {
                $tour_type_description = $tour_type->tour_type_descriptions()
                                                            ->where('language_id', $this->adminLanguage())
                                                            ->first();
                $data[] = array(
                    'tour_type' => $tour_type,
                    'tour_type_description' => $tour_type_description
                );                                            
            }
        }
        return $data;
    }

    public function listDurations()
    {
        $data = [];
        $tour_durations = TourDuration::all();
        if( $tour_durations) {
            foreach( $tour_durations as $tour_duration ) {
                $tour_duration_description = $tour_duration->tour_duration_descriptions()
                                                            ->where('language_id', $this->adminLanguage())
                                                            ->first();
                $data[] = array(
                    'tour_duration' => $tour_duration,
                    'tour_duration_description' => $tour_duration_description
                );                                            
            }
        }
        return $data;
    }

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
        $tours = tour::all();
        foreach($tours as $tour) {
            $tour_descriptions = $tour->tour_descriptions->where('language_id', $this->adminLanguage())->first();
            $data[] = array(
                'tour' => $tour,
                'tour_descriptions' => $tour_descriptions,
            );
        }
        return $data;
    }

    public function edit( $id ) 
    {
        $data = [];
		$tour = tour::find($id);
        $tour_descriptions = [];
        if($tour->tour_descriptions) {
            foreach($tour->tour_descriptions as $tour_description) {
                $tour_descriptions[$tour_description->language_id] = $tour_description;
            }
        }
        
		$data['tour'] = $tour;
        $data['tour_descriptions'] = $tour_descriptions;
		return $data;
    }
}
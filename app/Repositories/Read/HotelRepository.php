<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;
use App\Models\Hotel;
use App\Models\HotelDescription;
use App\Models\PropertyFacility;
use App\Models\PropertyFacilityGroupDescription;
use App\Models\PropertyFacilityDescription;
use App\Models\PropertyFacilityGroup;
class HotelRepository implements CRUDInterface {

	use ConfigSetting;

	public function index() {
		$hotels         = Hotel::all();
		$property_facility = PropertyFacilityDescription::where('language_id', $this->adminLanguage())->with('property_facility');
		$data['hotels'] = [];
		foreach ( $hotels as $hotel ) {
			// $hotel_description = HotelDescription::where('hotel_id', $hotel->id)->where('language_id', $this->$this->adminLanguage())->get();
			$hotel_description = $hotel->descriptions;
			$hotel_description = $hotel_description->where('language_id', $this->adminLanguage())->first();
			if($hotel_description) {
				$data['hotels'][] = array(
					'id'         => $hotel->id,
					'status'     => $hotel->status,
					'sort_order' => $hotel->sort_order,
					'name'		 =>  $hotel_description->name
				);
			}
		}
		return $data;
	}

	public function edit( $id ) {
		$data = [];
		$hotel =  Hotel::find( $id );
        $hotel_descriptions = [];
        if($hotel->descriptions) {
            foreach($hotel->descriptions as $description) {
                $hotel_descriptions[$description->language_id] = $description;
            }
        }
        $hotel_facilities = [];
		if ( $hotel->property_facilities ) {
			foreach ( $hotel->property_facilities as $property_facility ) {
				array_push( $hotel_facilities, $property_facility->property_facility_id );
			}
		}
		$data['images'] = $hotel->images;
		$data['hotel'] = $hotel;
        $data['hotel_descriptions'] = $hotel_descriptions;
		$data['hotel_facilities']   = $hotel_facilities;
		return $data;
	}

	public function create()
	{
		$data['hotel_facilities'] = [];
		$property_facility_group = PropertyFacilityGroup::with('property_facilities', 'property_facility_group_descriptions')->get();
		foreach($property_facility_group as $property_facility_group) {
			$group_name = $property_facility_group->property_facility_group_descriptions()->where('language_id', $this->adminLanguage())->first();
			$property_facilities = $property_facility_group->property_facilities;
			$facility_name = [];
			foreach($property_facilities as $property_facilities) {
				$facility_name[] = $property_facilities->property_facility_descriptions()->where('language_id', $this->adminLanguage())->first();
			}
			$data['hotel_facilities'][] = array(
				'group_name' => $group_name,
				'facility_name' => $facility_name
			);
		}
		return $data;
	}
}
<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;
use App\Models\Room;
use App\Models\Hotel;
use App\Models\RoomTypeDescription;
use App\Models\BedTypeDescription;
use App\Models\RoomType;
use App\Models\HotelDescription;
use App\Models\PropertyFacilityDescription;
use App\Models\FacilityGroup;

class RoomRepository implements CRUDInterface {

	use ConfigSetting;

    public function listRoomType()
    {
        $data = [];
        $room_type_descriptions = RoomTypeDescription::with('room_type')
                                        ->where('language_id', $this->adminLanguage())
                                        ->get();
        if($room_type_descriptions) {
            foreach($room_type_descriptions as $room_type_descriptions) {
               $room_type = $room_type_descriptions->room_type;
               $data[] = array(
                'id' => $room_type->room_type_id,
                'room_type_name' => $room_type_descriptions->name,
                'sort_order' => $room_type->sort_order
            );
            }
        }
        return $data;
    }

    public function listBedType()
    {
        $data = [];
        $bed_type_descriptions = BedTypeDescription::with('bed_type')
                                        ->where('language_id', $this->adminLanguage())
                                        ->get();
        if($bed_type_descriptions) {
            foreach($bed_type_descriptions as $bed_type_descriptions) {
               $bed_type = $bed_type_descriptions->bed_type;
               $data[] = array(
                'id' => $bed_type->bed_type_id,
                'bed_type_name' => $bed_type_descriptions->name,
                'sort_order' => $bed_type->sort_order
            );
            }
        }
        
        return $data;
    }

    public function listHotels() 
    {
        $data = [];
        $hotels         = Hotel::where('status', 0)->get();
		$property_facility = PropertyFacilityDescription::where('language_id', $this->adminLanguage())->with('property_facility');
		foreach ( $hotels as $hotel ) {
			$hotel_description = $hotel->descriptions;
			$hotel_description = $hotel_description->where('language_id', $this->adminLanguage())->first();
			if($hotel_description) {
				$data[] = array(
					'id'         => $hotel->id,
					'sort_order' => $hotel->sort_order,
					'name'		=>  $hotel_description->name
				);
			}
			
        }
		return $data;
    }

    public function index() 
    {
        $data = [];
        $rooms = Room::all();
        foreach($rooms as $room) {
            $room_descriptions = $room->room_descriptions->where('language_id', $this->adminLanguage())->first();
            $data[] = array(
                'room' => $room,
                'room_descriptions' => $room_descriptions,
            );
        }
        return $data;
    }

    public function edit( $id ) 
    {
        $data = [];
		$room = Room::find($id);
        $room_descriptions = [];
        if($room->room_descriptions) {
            foreach($room->room_descriptions as $room_description) {
                $room_descriptions[$room_description->language_id] = $room_description;
            }
        }
        $facility_groups = [];
		if ( $room->room_facilities ) {
			foreach ( $room->room_facilities as $room_facilities ) {
				array_push( $facility_groups, $room_facilities->facility_id );
			}
        }
        
		$data['room'] = $room;
        $data['room_descriptions'] = $room_descriptions;
        $data['facility_groups']   = $facility_groups;
		return $data;
    }

    public function facilities()
	{
        $data = [];
		$facility_groups = FacilityGroup::with('facility_group_descriptions', 'facilities')->get();
        foreach($facility_groups as $facility_group) {
			$facility_group_desc = $facility_group->facility_group_descriptions()->where('language_id', $this->adminLanguage())->first();
            $room_facilities = $facility_group->facilities;
            // dd($room_facilities);
            $facility_name = [];
			foreach($room_facilities as $facilities) {
				$facility_name[] = $facilities->facility_descriptions()->where('language_id', $this->adminLanguage())->first();
            }
			$data[] = array(
				'facility_group_name' => $facility_group_desc,
				'facility_name' => $facility_name
			);
        }
		return $data;
	}
    
    
}
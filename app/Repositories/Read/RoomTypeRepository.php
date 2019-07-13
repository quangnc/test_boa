<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;
use App\Models\RoomType;
use App\Models\RoomTypeDescription;
class RoomTypeRepository implements CRUDInterface {

	use ConfigSetting;

    public function index() 
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

    public function edit( $id ) {
        $room_type = RoomType::find($id);
        $data = [];
        $descriptions = [];
		if ( $room_type->room_type_descriptions ) {
			foreach ( $room_type->room_type_descriptions as $description ) {
				$descriptions[ $description->language_id ] = $description;
			}
        }
        $data['room_type'] = $room_type;
        $data['room_type_descriptions'] = $descriptions;
        return $data;
    }
    
}
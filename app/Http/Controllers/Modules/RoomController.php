<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Helper;
use App\Repositories\Read\ConfigSetting;

class RoomController extends Controller {
	use ConfigSetting;
	public function index( $dt ) {
		$setting = json_decode($dt->setting);
		$col_room = $setting->col_room;
		$data['room'] = [];
		$room = Room::take($col_room)->get();
		$id_room_hotel = [];
        if($room) {
            foreach($room as $room) {
                $room_desc  = $room->room_descriptions()
                                    ->where('language_id', $this->adminLanguage())
									->first();
                $data['room'][] = array(
                    'image_room' => Helper::resize($room->image, 500, 257),
                    'room_desc' => $room_desc,
				);
            }
		}
		return view( 'modules.room' )->with( 'data', $data );
	}
}
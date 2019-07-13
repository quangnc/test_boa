<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Helper;
use App\Repositories\Read\ConfigSetting;

class RoomcarouselController extends Controller {
    use ConfigSetting;
    
	public function index( $dt ) {
        $setting = json_decode($dt->setting);
        $data['carousel_room'] = [];
        $data['title_carousel'] = $setting->title_carousel;
        $rooms = Room::orderBy('room_id', 'desc')->take($setting->col_carousel_room)->get();
        if($rooms) {
            foreach($rooms as $room) {
                $room_desc  = $room->room_descriptions()
                                    ->where('language_id', $this->adminLanguage())
                                    ->first();             
                $data['carousel_room'][] = array(
                    'image_room' => Helper::resize($room->image, 500, 257),
                    'room_desc' => $room_desc,
				);
            }
        }
		return view( 'modules.roomcarousel', compact('data') );
	}
}
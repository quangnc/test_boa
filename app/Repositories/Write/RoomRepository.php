<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;

use App\Models\Room;
use App\Models\RoomDescription;
use App\Models\RoomFacility;
use App\Models\RoomImage;
use App\Models\RoomSpecial;
use DB;

class RoomRepository implements CRUDInterface {
	public function store( $data ) {
		DB::beginTransaction();
		try {
			$room = new Room();
			$data_room = (array) $data['room'];
			foreach ( $data_room as $key => $value ) {
				$room->$key = $value;
			}
			if ( $room->save() ) {
				// Create room descriptions
				if ( $data['room_descriptions'] ) {
					$room->room_descriptions()->createMany( $data['room_descriptions'] );
				}

				//Create Room facilities
				if ( $data['room_facilities'] ) {
					$room->room_facilities()->createMany( $data['room_facilities'] );
				}

				//Create Room images
				if ( $data['images']) {
					$room->images()->createMany( $data['images'] );
				}

				// Create special price
				if ( $data['specials'] ) {
					$room->room_specials()->createMany( $data['specials'] );
				}
			}
			DB::commit();
		} catch ( Exception $ex ) {
			DB::rollBack();
			return false;
		}
	}

	public function update( $data, $id ) {
		$room = Room::find( $id );
		$data_room = (array) $data['room'];

		foreach ( $data_room as $key => $value ) {
			$room->$key = $value;
		}

		if ( $room->save() ) {

			// Update room descriptions
			if ( $data['room_descriptions']  ) {
				$room->room_descriptions()->delete();
				$room->room_descriptions()->createMany( $data['room_descriptions'] );
			}

			//update Room facilities
			if ( $data['room_facilities'] ) {
				$room->room_facilities()->delete();
				$room->room_facilities()->createMany( $data['room_facilities'] );
			}

			//update Room images
			if ( $data['images'] ) {
				$room->images()->delete();
				$room->images()->createMany( $data['images'] );
			}

			// Update special price
			if ( $data['specials'] ) {
				$room->room_specials()->delete();
				$room->room_specials()->createMany( $data['specials']  );
			}

		}
	}

	public function destroy( $id ) {
		$room = Room::find( $id );
		if ( $room ) {
			$room->room_descriptions()->delete();
			$room->room_facilities()->delete();
			$room->room_specials()->delete();
			if( $room->images ) {
				$room->images()->delete();
			}
			$room->delete();
			// Delete specials
		}

		return "Information has been  deleted";
	}
}
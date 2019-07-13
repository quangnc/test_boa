<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;

use App\Models\RoomType;
use App\Models\RoomTypeDescription;
use DB;
class RoomTypeRepository implements CRUDInterface {
    public function store($data) 
    {
        DB::beginTransaction();
		try {
            $room_type = new RoomType();
			$data_room_type = (array) $data['room_type'];
			foreach ( $data_room_type as $key => $value ) {
				$room_type->$key = $value;
			}
            if($room_type->save()) {
                if ( $data['room_type_descriptions'] ) {
                    $room_type->room_type_descriptions()->createMany( $data['room_type_descriptions'] );
                }
            }
            DB::commit();
		} catch ( Exception $ex ) {
			DB::rollBack();

			return false;
		}
    }

    public function update( $data, $id ) {
        DB::beginTransaction();
		try {
            $room_type             = RoomType::find( $id );
			$data_room_type = (array) $data['room_type'];
            foreach ( $data_room_type as $key => $value ) {
				$room_type->$key = $value;
			}
            if($room_type->save()) {
                if ( $data['room_type_descriptions'] ) {
                    $room_type->room_type_descriptions()->delete();
                    $room_type->room_type_descriptions()->createMany( $data['room_type_descriptions'] );
                }
            }
            DB::commit();
        } catch ( Exception $ex ) {
            DB::rollBack();
            return false;
        }
        
    }

    public function destroy( $id ) {
        $room_type = RoomType::find( $id );
        if ( $room_type ) {
            $room_type_descriptions = $room_type->room_type_descriptions()->delete();
            $room_type->delete();
        }

        return "Information has been  deleted";
    }
}
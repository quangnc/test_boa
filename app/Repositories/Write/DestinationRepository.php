<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;

use App\Models\Destination;
use App\Models\DestinationDescription;
use DB;
class DestinationRepository implements CRUDInterface {
    public function store($data) 
    {
        DB::beginTransaction();
		try {
            $destination = new Destination();
			$data_destination = (array) $data['destination'];
			foreach ( $data_destination as $key => $value ) {
				$destination->$key = $value;
			}
            if($destination->save()) {
                if ( $data['destination_descriptions'] ) {
                    $destination->destination_descriptions()->createMany( $data['destination_descriptions'] );
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
            $destination             = Destination::find( $id );
			$data_destination = (array) $data['destination'];
            foreach ( $data_destination as $key => $value ) {
				$destination->$key = $value;
			}
            if($destination->save()) {
                if ( $data['destination_descriptions'] ) {
                    $destination->destination_descriptions()->delete();
                    $destination->destination_descriptions()->createMany( $data['destination_descriptions'] );
                }
            }
            DB::commit();
        } catch ( Exception $ex ) {
            DB::rollBack();
            return false;
        }
        
    }

    public function destroy( $id ) {
        $destination = Destination::find( $id );
        if ( $destination ) {
            $destination_descriptions = $destination->destination_descriptions()->delete();
            $destination->delete();
        }

        return "Information has been  deleted";
    }
}
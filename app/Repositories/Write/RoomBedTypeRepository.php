<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;

use App\Models\BedType;
use App\Models\BedTypeDescription;
use DB;
class RoomBedTypeRepository implements CRUDInterface {
    public function store($data) 
    {
        DB::beginTransaction();
		try {
            $bed_type = new BedType();
			$data_bed_type = (array) $data['bed_type'];
			foreach ( $data_bed_type as $key => $value ) {
				$bed_type->$key = $value;
			}
            if($bed_type->save()) {
                if ( $data['bed_type_descriptions'] ) {
                    $bed_type->bed_type_descriptions()->createMany( $data['bed_type_descriptions']  );
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
            $bed_type             = BedType::find( $id );
			$data_bed_type = (array) $data['bed_type'];
			foreach ( $data_bed_type as $key => $value ) {
				$bed_type->$key = $value;
			}
            if($bed_type->save()) {
                if ( $data['bed_type_descriptions'] ) {
                    $bed_type->bed_type_descriptions()->delete();
                    $bed_type->bed_type_descriptions()->createMany( $data['bed_type_descriptions']  );
                }
            }
            DB::commit();
		} catch ( Exception $ex ) {
			DB::rollBack();

			return false;
		}
    }

    public function destroy( $id ) {
        $bed_type = BedType::find( $id );
        if ( $bed_type ) {
            $bed_type_descriptions = $bed_type->bed_type_descriptions()->delete();
            $bed_type->delete();
        }

        return "Information has been  deleted";
    }
}
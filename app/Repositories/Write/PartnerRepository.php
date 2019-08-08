<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;
use App\Models\Partner;
use DB;
class PartnerRepository implements CRUDInterface {
    
    public function store( $data ) 
    {
        DB::beginTransaction();
		try {
			$partner = new Partner();
			foreach ($data as $key => $value) {
				$partner->name = $value['name'];
				$partner->image = $value['image'];
				$partner->url = $value['url'];
				$partner->status = $value['status'];
				$partner->sort_order = $value['sort_order'];
				$partner->save();
			}

			DB::commit();
		} catch ( Exception $ex ) {
			DB::rollBack();
			return false;
        }
    }

    public function update( $data, $id)
    {
        DB::beginTransaction();
		try {
			$partner = Partner::find( $id );
			foreach ( $data as $key => $value ) {
				$partner->$key = $value;
			}
			$partner->save();
			DB::commit();
		} catch ( Exception $ex ) {
			DB::rollBack();
			return false;
        }
    }

    public function destroy( $id )
    {
		DB::beginTransaction();
		try {
			Partner::find($id)->delete();
			DB::commit();
		} catch ( Exception $ex ) {
			DB::rollBack();
			return false;
        }
    }

}
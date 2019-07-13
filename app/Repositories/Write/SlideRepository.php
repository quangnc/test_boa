<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;
use App\Models\Slide;
use DB;
class SlideRepository implements CRUDInterface {
    
    public function store( $data ) 
    {
        DB::beginTransaction();
		try {
			$slide = new Slide();
			foreach ($data as $key => $value) {
				$slide->title = $value['title'];
				$slide->image = $value['image'];
				$slide->status = $value['status'];
				$slide->sort_order = $value['sort_order'];
				$slide->save();
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
			$slide =  Slide::find( $id );
			foreach ( $data as $key => $value ) {
				$slide->$key = $value;
			}
			$slide->save();
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
			Slide::find($id)->delete();
			DB::commit();
		} catch ( Exception $ex ) {
			DB::rollBack();
			return false;
        }
    }

}
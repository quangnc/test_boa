<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;
use App\Models\UploadFile;
use DB;
class UploadFileRepository implements CRUDInterface {
    
    public function store( $data ) 
    {
        DB::beginTransaction();
		try {
			$file = new UploadFile();
			$file->title = $data['title'];
				$file->file = $data['file']->getClientOriginalName();
				$file->status = $data['status'];
				$file->loai = $data['loai'];
				$file->product_id = $data['product_id'];
				$file->sort_order = $data['sort_order'];
				if($file->save()) {
        			$data['file']->move('public/upload/file/', $data['file']->getClientOriginalName());
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
			$file =  UploadFile::find( $id );
			foreach ( $data as $key => $value ) {
				$file->$key = $value;
			}
			$file->save();
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
			UploadFile::find($id)->delete();
			DB::commit();
		} catch ( Exception $ex ) {
			DB::rollBack();
			return false;
        }
    }

}
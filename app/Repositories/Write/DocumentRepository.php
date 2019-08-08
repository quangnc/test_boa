<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;
use App\Models\Document;
use App\Models\Product;
use App\Models\DocumentDescription;
use DB;
class DocumentRepository implements CRUDInterface {
    
    public function store( $data ) 
    {
        DB::beginTransaction();
		try {
			$blog_post = new Document();
			$data_blog_post = (array) $data['blog_post'];
			foreach ( $data_blog_post as $key => $value ) {
				$blog_post->$key = $value;
			}
			if ( $blog_post->save() ) {
                // Create cruise descriptions
				if ( $data['blog_post_descriptions'] ) {
					$blog_post->document_descriptions()->createMany( $data['blog_post_descriptions'] );
                }
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
			$blog_post =  Document::find( $id );
			$data_blog_post = (array) $data['blog_post'];
			foreach ( $data_blog_post as $key => $value ) {
				$blog_post->$key = $value;
			}
			if ( $blog_post->save() ) {
                // Create cruise descriptions
				if ( $data['blog_post_descriptions'] ) {
                    $blog_post->document_descriptions()->delete();
					$blog_post->document_descriptions()->createMany( $data['blog_post_descriptions'] );
                }
			}
			DB::commit();
		} catch ( Exception $ex ) {
			DB::rollBack();
			return false;
        }
    }

    public function destroy( $id )
    {
        $blog_post = Document::find($id);

        if($blog_post) {
            $blog_post_description = $blog_post->document_descriptions()->delete();
            $blog_post->delete();
        }
        return "Information has been  deleted";
    }

}
<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;
use App\Models\CateMenu;
use DB;
class CateMenuRepository implements CRUDInterface {
    
    public function store( $data ) 
    {
        DB::beginTransaction();
		try {
			$blog_post = new CateMenu();
			$data_blog_post = (array) $data['blog_post'];
			foreach ( $data_blog_post as $key => $value ) {
				$blog_post->$key = $value;
			}
			if ( $blog_post->save() ) {
                // Create cruise descriptions
				if ( $data['blog_post_descriptions'] ) {
					$blog_post->cate_menu_descriptions()->createMany( $data['blog_post_descriptions'] );
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
			$blog_post =  CateMenu::find( $id );
			$data_blog_post = (array) $data['blog_post'];
			foreach ( $data_blog_post as $key => $value ) {
				$blog_post->$key = $value;
			}
			if ( $blog_post->save() ) {
                // Create cruise descriptions
				if ( $data['blog_post_descriptions'] ) {
                    $blog_post->cate_menu_descriptions()->delete();
					$blog_post->cate_menu_descriptions()->createMany( $data['blog_post_descriptions'] );
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
        $blog_post = CateMenu::find($id);

        if($blog_post) {
            $blog_post_description = $blog_post->cate_menu_descriptions()->delete();
            $blog_post->delete();
        }
        return "Information has been  deleted";
    }

}
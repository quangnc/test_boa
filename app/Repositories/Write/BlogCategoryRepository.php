<?php

namespace App\Repositories\Write;
use App\Repositories\Contracts\Write\CRUDInterface;
use App\Models\BlogCategory;
use DB;
class BlogCategoryRepository implements CRUDInterface {
    public function store($data)
    {
        DB::beginTransaction();
		try {
			$blog_category = new BlogCategory();
			$data_blog_category = (array) $data['blog_category'];
			foreach ( $data_blog_category as $key => $value ) {
				$blog_category->$key = $value;
			}
			if ( $blog_category->save() ) {
                // Create blog_category descriptions
				if ( $data['blog_category_descriptions'] ) {
					$blog_category->blog_category_descriptions()->createMany( $data['blog_category_descriptions'] );
				}
			}
			DB::commit();
		} catch ( Exception $ex ) {
			DB::rollBack();
			return false;
        }
    }

    public function update( $data, $id )
    {
        DB::beginTransaction();
		try {
			$blog_category =  BlogCategory::find( $id );
			$data_blog_category = (array) $data['blog_category'];
			foreach ( $data_blog_category as $key => $value ) {
				$blog_category->$key = $value;
			}
			if ( $blog_category->save() ) {
				// Create blog_category descriptions
				if ( $data['blog_category_descriptions'] ) {
                    $blog_category->blog_category_descriptions()->delete();
					$blog_category->blog_category_descriptions()->createMany( $data['blog_category_descriptions'] );
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
        $blog_category = BlogCategory::find($id);

        if($blog_category) {
            $blog_category_description = $blog_category->blog_category_descriptions()->delete();
            $blog_category->delete();
        }
        return "Information has been  deleted";
    }
}
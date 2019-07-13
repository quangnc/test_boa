<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;
use App\Models\BlogPost;
use App\Models\BlogTag;
use App\Models\BlogCategory;
use App\Models\BlogPostDescription;
use DB;
class BlogPostRepository implements CRUDInterface {
    
    public function store( $data ) 
    {
        DB::beginTransaction();
		try {
			$blog_post = new BlogPost();
			$data_blog_post = (array) $data['blog_post'];
			foreach ( $data_blog_post as $key => $value ) {
				$blog_post->$key = $value;
			}
			if ( $blog_post->save() ) {
                // Create cruise descriptions
				if ( $data['blog_post_descriptions'] ) {
					$blog_post->blog_post_descriptions()->createMany( $data['blog_post_descriptions'] );
                }

                // Create cruise descriptions
				if ( $data['blog_tag'] ) {
                    $blog_tag = new BlogTag($data['blog_tag']);
					$blog_post->blog_tags()->save( $blog_tag);
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
			$blog_post =  BlogPost::find( $id );
			$data_blog_post = (array) $data['blog_post'];
			foreach ( $data_blog_post as $key => $value ) {
				$blog_post->$key = $value;
			}
			if ( $blog_post->save() ) {
                // Create cruise descriptions
				if ( $data['blog_post_descriptions'] ) {
                    $blog_post->blog_post_descriptions()->delete();
					$blog_post->blog_post_descriptions()->createMany( $data['blog_post_descriptions'] );
                }

                // Create cruise descriptions
				if ( $data['blog_tag'] ) {
                    $blog_post->blog_tags()->delete();
					$blog_tag = new BlogTag($data['blog_tag']);
					$blog_post->blog_tags()->save( $blog_tag);
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
        $blog_post = BlogPost::find($id);

        if($blog_post) {
            $blog_post_description = $blog_post->blog_post_descriptions()->delete();
            $blog_post_tag = $blog_post->blog_tags()->delete();
            $blog_post->delete();
        }
        return "Information has been  deleted";
    }

}
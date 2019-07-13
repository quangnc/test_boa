<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $primaryKey = 'post_id';

    public function blog_tags()
    {
        return $this->hasMany( 'App\Models\BlogTag', 'post_id' );
    }
    
    public function blog_post_descriptions()
    {
        return $this->hasMany( 'App\Models\BlogPostDescription', 'post_id' );
    }

    public function blog_categories()
    {
        return $this->hasOne( 'App\Models\BlogCategory', 'blog_category_id', 'blog_category_id' );
    }
}

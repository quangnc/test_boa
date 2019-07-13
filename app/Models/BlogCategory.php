<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blog_categories';
    protected $primaryKey = 'blog_category_id';
    public $timestamps = false;

    public function blog_category_descriptions()
    {
        return $this->hasMany( 'App\Models\BlogCategoryDescription', 'blog_category_id', 'blog_category_id' );
    }

    public function blog_post()
    {
        return $this->belongsTo('App\Models\BlogPost', 'blog_category_id', 'blog_category_id');
    }
}

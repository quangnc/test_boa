<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPostDescription extends Model
{
    public $timestamps = false;
    protected $fillable = [ 'name', 'language_id', 'description', 'content', 'meta_title', 'meta_description', 'meta_keyword' ];
    public function blog_post()
    {
        return $this->belongsTo('App\Models\BlogPost', 'post_id');
    }
}

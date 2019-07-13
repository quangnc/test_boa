<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    protected $primaryKey = 'blog_tag_id';
    public $timestamps = false;
    protected $fillable = [ 'name' ];
    public function blog_post()
    {
        return $this->belongsTo('App\Models\BlogPost', 'post_id');
    }
}

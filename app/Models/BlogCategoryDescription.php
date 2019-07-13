<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategoryDescription extends Model
{
    public $timestamps = false;
    protected $fillable = [ 'name', 'language_id', 'description' ];
    public function blog_category()
    {
        return $this->belongsTo('App\Models\BlogCategory', 'blog_categoty_id', 'blog_categoty_id');
    }
}

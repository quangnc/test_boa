<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuDescription extends Model
{
    public $timestamps = false;
    protected $fillable = [ 'name', 'language_id', 'description', 'content', 'meta_title', 'meta_description', 'meta_keyword' ];
    public function menu()
    {
        return $this->belongsTo('App\Models\BlogPost', 'menu_id');
    }
}

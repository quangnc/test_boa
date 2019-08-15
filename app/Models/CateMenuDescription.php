<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CateMenuDescription extends Model
{
    public $timestamps = false;
    protected $fillable = [ 'name', 'language_id' ];
    public function cate_menu()
    {
        return $this->belongsTo('App\Models\CateMenu', 'cate_menu_id', 'cate_menu_id');
    }
}

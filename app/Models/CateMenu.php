<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CateMenu extends Model
{
    protected $table = 'cate_menu';
    protected $primaryKey = 'cate_menu_id';
    public $timestamps = false;

    public function cate_menu_descriptions()
    {
        return $this->hasMany( 'App\Models\CateMenuDescription', 'cate_menu_id');
    }

    public function menu()
    {
        return $this->hasMany('App\Models\Menu', 'cate_menu_id');
    }
}

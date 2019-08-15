<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'menu_id';
    
    public function menu_descriptions()
    {
        return $this->hasMany( 'App\Models\MenuDescription', 'menu_id' );
    }

    public function cate_menu()
    {
        return $this->belongsTo( 'App\Models\CateMenu', 'cate_menu_id' );
    }
}

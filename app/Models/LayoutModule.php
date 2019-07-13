<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LayoutModule extends Model {
	protected $table = 'layout_modules';
	protected $primaryKey = 'layout_module_id';
	public $timestamps = false;

	protected $fillable = [ 'module_id', 'position', 'sort_order' ];

	public function layout() {
		return $this->belongsTo( 'App\Models\Layout', 'layout_id', 'layout_id' );
	}

	public function module() {
		return $this->belongsTo( 'App\Models\Module', 'module_id', 'module_id' );
	}
}

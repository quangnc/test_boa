<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Layout extends Model {
	protected $table = 'layouts';
	protected $primaryKey = 'layout_id';
	public $timestamps = false;

	public function modules() {
		return $this->hasMany( 'App\Models\LayoutModule', 'layout_id', 'layout_id' );
	}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model {
	protected $table = 'modules';
	protected $primaryKey = 'module_id';
	public $timestamps = false;

	public function layouts() {
		return $this->hasMany( 'App\Models\Layout' );
	}
}

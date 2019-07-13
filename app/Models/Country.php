<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {
	protected $primaryKey = 'country_id';

	public function zones() {
		return $this->hasMany( 'App\Models\Zone', 'country_id' );
	}
}

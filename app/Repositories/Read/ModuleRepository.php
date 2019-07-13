<?php
/**
 * Created by PhpStorm.
 * User: dangtienngoc
 * Date: 6/28/18
 * Time: 2:18 PM
 */

namespace App\Repositories\Read;


use App\Repositories\Contracts\Read\CRUDInterface;
use App\Models\Module;

class ModuleRepository implements CRUDInterface {
	public function index() {
		return Module::all();
	}

	public function edit( $id ) {
		return Module::find( $id );
	}

}
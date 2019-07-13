<?php
/**
 * Created by PhpStorm.
 * User: dangtienngoc
 * Date: 6/28/18
 * Time: 2:19 PM
 */

namespace App\Repositories\Write;


use App\Repositories\Contracts\Write\CRUDInterface;
use App\Models\Module;

class ModuleRepository implements CRUDInterface {
	public function store( $data ) {

		$module = new Module();

		$module->code    = $data['code'];
		$module->name    = $data['name'];
		$module->status    = $data['status'];
		$module->setting = json_encode( $data );

		return $module->save();
	}

	public function update( $data, $id ) {
		$module = Module::find( $id );

		$module->code    = $data['code'];
		$module->name    = $data['name'];
		$module->status    = $data['status'];
		$module->setting = json_encode( $data );

		return $module->save();
	}

	public function destroy( $id ) {
		$module = Module::find( $id );

		return $module->delete();
	}
}
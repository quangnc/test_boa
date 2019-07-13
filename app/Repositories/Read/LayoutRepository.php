<?php
/**
 * Created by PhpStorm.
 * User: dangtienngoc
 * Date: 6/28/18
 * Time: 8:23 AM
 */

namespace App\Repositories\Read;


use App\Repositories\Contracts\Read\CRUDInterface;
use App\Models\Layout;

class LayoutRepository implements CRUDInterface {
	public function index() {
		return Layout::all();
	}

	public function edit( $id ) {

		$layout = Layout::find( $id );

		$data = array();

		$data['name']  = $layout->name;
		$data['route'] = $layout->route;

		$layoutModules = [];
		foreach ( $layout->modules as $layoutModule ) {
			$layoutModules[] = array(
				'layout_module_id' => $layoutModule->layout_module_id,
				'module_id'        => $layoutModule->module_id,
				'position'         => $layoutModule->position,
				'sort_order'       => $layoutModule->sort_order,
				'name'             => $layoutModule->module->name,
				'code'             => $layoutModule->module->code,
			);
		}

		$data['layouts'] = $layoutModules;

		return $data;
	}
}
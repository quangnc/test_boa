<?php
/**
 * Created by PhpStorm.
 * User: dangtienngoc
 * Date: 6/28/18
 * Time: 8:23 AM
 */

namespace App\Repositories\Write;


use App\Repositories\Contracts\Write\CRUDInterface;
use App\Models\Layout;
use App\Models\LayoutModule;

class LayoutRepository implements CRUDInterface {
	public function store( $data ) {

		$layout = new Layout();

		$layout->name  = $data['name'];
		$layout->route = $data['route'];

		$wasSave = $layout->save();

		if ( $wasSave ) {

			$layoutModules = [];

			foreach ( $data['layout_modules'] as $layoutModule ) {
				$layoutModules[] = new LayoutModule( [
					'module_id'  => $layoutModule->module_id,
					'position'   => $layoutModule->position,
					'sort_order' => $layoutModule->sort_order
				] );
			}

			$layout->modules()->saveMany( $layoutModules );
		}

		return $wasSave;
	}

	public function update( $data, $id ) {
		$layout = Layout::find( $id );

		$layout->name  = $data['name'];
		$layout->route = $data['route'];

		$wasSave = $layout->save();

		if ( $wasSave ) {

			$layout->modules()->delete();
			
			$layoutModules = [];
			foreach ( $data['layout_modules'] as $layoutModule ) {
				$layoutModules[] = new LayoutModule( [
					'module_id'  => $layoutModule->module_id,
					'position'   => $layoutModule->position,
					'sort_order' => $layoutModule->sort_order
				] );
			}

			$layout->modules()->saveMany( $layoutModules );
		}

		return $wasSave;
	}

	public function destroy( $id ) {
		$layout = Layout::find( $id );

		$layout->modules()->delete();

		return $layout->delete();
	}

}
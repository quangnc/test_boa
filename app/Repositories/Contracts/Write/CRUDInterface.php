<?php
/**
 * Created by PhpStorm.
 * User: dangtienngoc
 * Date: 6/28/18
 * Time: 8:35 AM
 */

namespace App\Repositories\Contracts\Write;


interface CRUDInterface {
	public function store( $data );

	public function update( $data, $id );

	public function destroy( $id );
	
}
<?php
/**
 * Created by PhpStorm.
 * User: dangtienngoc
 * Date: 6/28/18
 * Time: 8:35 AM
 */

namespace App\Repositories\Contracts\Read;


interface CRUDInterface {
	public function index();

	public function edit( $id );
}
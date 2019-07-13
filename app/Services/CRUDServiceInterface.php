<?php
/**
 * Created by PhpStorm.
 * User: dangtienngoc
 * Date: 6/28/18
 * Time: 8:41 AM
 */

namespace App\Services;

interface CRUDServiceInterface {
	public function index();

	public function create();

	public function store( $data );

	public function edit( $id );

	public function update( $data, $id );

	public function destroy( $id );
}
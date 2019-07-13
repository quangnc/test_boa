<?php
/**
 * Created by PhpStorm.
 * User: dangtienngoc
 * Date: 6/28/18
 * Time: 2:15 PM
 */

namespace App\Services;

use App\Repositories\Read\ModuleRepository as Read;
use App\Repositories\Write\ModuleRepository as Write;

class ModuleService implements CRUDServiceInterface {

	protected $read;
	protected $write;

	/**
	 * ModuleService constructor.
	 */
	public function __construct( Read $read, Write $write ) {
		$this->read  = $read;
		$this->write = $write;
	}

	public function index() {
		return $this->read->index();
	}

	public function create() {}

	public function store( $data ) {
		return $this->write->store( $data );
	}

	public function edit( $id ) {
		return $this->read->edit( $id );
	}

	public function update( $data, $id ) {
		return $this->write->update( $data, $id );
	}

	public function destroy( $id ) {
		return $this->write->destroy( $id );
	}

}
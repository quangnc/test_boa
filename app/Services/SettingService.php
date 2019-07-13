<?php
/**
 * Created by PhpStorm.
 * User: dangtienngoc
 * Date: 6/28/18
 * Time: 8:42 AM
 */

namespace App\Services;

use App\Repositories\Read\SettingRepository as Read;
use App\Repositories\Write\SettingRepository as Write;

class SettingService implements CRUDServiceInterface {

	protected $read;
	protected $write;

	public function __construct( Read $read, Write $write ) {
		$this->read  = $read;
		$this->write = $write;
	}

	public function index() {
		$data = $this->read->index();
		return $data;
	}

	public function create() {

	}

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
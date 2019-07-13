<?php
/**
 * Created by PhpStorm.
 * User: dangtienngoc
 * Date: 7/4/18
 * Time: 10:58 AM
 */

namespace App\Repositories\Read;


use App\Repositories\Contracts\Read\CRUDInterface;
use App\models\Setting;

class SettingRepository implements CRUDInterface {
	public function index() {
		return Setting::all();
	}

	public function edit( $id ) {
		return Setting::find($id);
	}

}
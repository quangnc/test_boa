<?php
/**
 * Created by PhpStorm.
 * User: dangtienngoc
 * Date: 7/4/18
 * Time: 10:59 AM
 */

namespace App\Repositories\Write;


use App\Repositories\Contracts\Write\CRUDInterface;
use App\models\Setting;

class SettingRepository implements CRUDInterface {
	public function store( $data ) {

		// Get all current setting
		$settings = Setting::all();

		// Get IDs
		$ids = [];
		foreach ( $settings as $setting ) {
			$ids[] = $setting->setting_id;
		}

		// Remove all setting
		if (count($ids)) {
			Setting::destroy($ids);
		}

		// Save new settings
		$codes = array_keys($data);

		foreach ($codes as $code) {
			$setting  = new Setting([
				'code' => $code,
				'value' => is_array( $data[$code] ) ? json_encode( $data[$code] ) : $data[$code],
				'serialized' => is_array( $data[$code] ) ? 1 : 0,
			]);

			$setting->save();
		}
	}

	public function update( $data, $id ) {
		$setting             = Setting::find( $id );
		$setting->code       = $data['code'];
		$setting->value      = is_array( $data['value'] ) ? json_encode( $data['value'] ) : $data['value'];
		$setting->serialized = is_array( $data['value'] ) ? 1 : 0;

		return $setting->save();
	}

	public function destroy( $id ) {
		$setting = Setting::find( $id );
		$setting->modules()->delete();

		return $setting->delete();
	}

}
<?php
/**
 * Created by PhpStorm.
 * User: dangtienngoc
 * Date: 7/24/18
 * Time: 3:31 PM
 */

namespace App\Repositories\Read;

use App\models\Setting;

trait ConfigSetting {
	public function adminLanguage() {
		$admin_language = config( 'setting.admin_language' );

		$config_language = Setting::where( 'code', 'admin_language' );

		if ( $config_language->count() ) {
			$admin_language = $config_language->first()->value;
		}
		return $admin_language;
	}
}
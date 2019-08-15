<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Module;

use App\Models\Menu;
use App\Models\CateMenu;
use App\Repositories\Read\ConfigSetting;
class HeaderComposer {

	protected $module;
	use ConfigSetting;
	public function __construct( Module $module ) {
		$this->module = $module;
	}

	/**
	 * Bind data to the view.
	 *
	 * @param  View $view
	 *
	 * @return void
	 */
	public function compose( View $view ) {

		$menu = CateMenu::orderBy('sort_order', 'asc')->where('status', 0)->get();
		if ($menu) {
			foreach ($menu as $value) {
				$menuCateDescription = $value->cate_menu_descriptions()->where('language_id', config('app.language', $this->adminLanguage()))->first();
				$menuItem = $value->menu()->get();
				
				// foreach ($menuItem as $item) {
				// 	dd( $item);
				// 	$menuDescription[] = array(
				// 		'item' => $item->menu_descriptions()->where('language_id', config('app.language', $this->adminLanguage()))->first(),
				// 	);
				// }
				$menus[] = array(
					'menuCate' => $value,
					'menuCateDescription' => $menuCateDescription,
					'menuChildren'     =>   $menuItem,
					'language' => config('app.language', $this->adminLanguage())
				);
			}
		}
		$view->with( 'menus', $menus );
	}
}
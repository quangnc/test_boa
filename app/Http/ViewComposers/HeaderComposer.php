<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Module;

class HeaderComposer {

	protected $module;

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

		$menus = array();

		$megamenu = Module::where( 'code', 'megamenu' )->first();

		if ( $megamenu ) {

			$data = json_decode( $megamenu->toArray()['setting'] );

			$dataSetting = json_decode( $data->megamenu );

			if ( $dataSetting ) {
				foreach ( $dataSetting as $key => $menu ) {

					$children = array();

					if ( count( $menu->children ) ) {

						foreach ( $menu->children as $key => $child ) {

							$children[] = array(
								'title' => $child->title,
								'href'  => "/",
							);

						}

					}

					$menus[] = array(
						'title'    => $menu->title,
						'href'     => $menu->data,
						'children' => $children,
					);

				}
			}
		}

		$view->with( 'menus', $menus );
	}
}
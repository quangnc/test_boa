<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Layout;
use App\Models\LayoutModule;

class ContentBottomComposer {

	protected $path = '/';

	public function __construct( Request $request ) {
		$this->path = $request->path();
	}

	/**
	 * Bind data to the view.
	 *
	 * @param  View $view
	 *
	 * @return void
	 */
	public function compose( View $view ) {

		$data   = '';
		$layout = Layout::where( 'route', $this->path )->first();

		if ( $layout ) {

			$modules = $layout->modules->where( 'position', 'content-bottom' );

			foreach ( $modules as $module ) {
				$data .= resolve( 'App\Http\Controllers\Modules\\' . ucfirst( $module->module->code ) . 'Controller' )->index( $module->module );
			}
		}
		$view->with( 'modules', $data );
	}
}
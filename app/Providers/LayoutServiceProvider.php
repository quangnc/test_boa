<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class LayoutServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		View::composer(
			[ 'layouts.content_top' ],
			'App\Http\ViewComposers\ContentTopComposer'
		);

		View::composer(
			[ 'layouts.content_bottom' ],
			'App\Http\ViewComposers\ContentBottomComposer'
		);

		View::composer(
			[ 'layouts.content_left' ],
			'App\Http\ViewComposers\ContentLeftComposer'
		);

		View::composer(
			[ 'layouts.content_right' ],
			'App\Http\ViewComposers\ContentRightComposer'
		);

		View::composer(
			[ 'layouts.header' ],
			'App\Http\ViewComposers\HeaderComposer'
		);
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
	}
}

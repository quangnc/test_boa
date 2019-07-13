<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;
use App\Models\Page;

class PageRepository implements CRUDInterface {
	public function store( $data ) {
		$page = new Page();

		$page_attributes = (array) $data['page'];
		foreach ( $page_attributes as $key => $value ) {
			$page->$key = $value;
		}

		$hasSave = $page->save();
		if ( $hasSave ) {
			$page->descriptions()->createMany( $data['page_descriptions'] );
		}

		return $hasSave;
	}

	public function update( $data, $id ) {
		$page = Page::find( $id );

		$page_attributes = (array) $data['page'];
		foreach ( $page_attributes as $key => $value ) {
			$page->$key = $value;
		}

		$hasSave = $page->save();
		if ( $hasSave ) {

			if ( $page->descriptions ) {
				$page->descriptions()->delete();
			}

			$page->descriptions()->createMany( $data['page_descriptions'] );
		}

		return $hasSave;
	}

	public function destroy( $id ) {
		$page = Page::find( $id );

		if ( $page->descriptions ) {
			$page->descriptions()->delete();
		}

		return $page->delete();
	}
}
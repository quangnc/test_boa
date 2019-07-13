<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;
use App\Models\Page;

class PageRepository implements CRUDInterface {

	use ConfigSetting;

	public function index() {

		$data = array();

		$pages = Page::all();

		if ( $pages ) {
			foreach ( $pages as $page ) {

				$name = '';
				if ( $page->descriptions->count() ) {
					$descriptions = $page->descriptions()->where( 'language_id', $this->adminLanguage() )->first();
					$name         = $descriptions->name;
				}

				$data[] = array(
					'id'     => $page->page_id,
					'slug'   => $page->slug,
					'name'   => $name,
					'status' => $page->status
				);
			}
		}

		return $data;
	}

	public function edit( $id ) {

		$data = array();

		$page = Page::find( $id );

		$data['page'] = $page;

		$page_descriptions = array();

		foreach ( $page->descriptions as $description ) {
			$page_descriptions[ $description->language_id ] = $description;
		}

		$data['page_descriptions'] = $page_descriptions;

		return $data;
	}
}
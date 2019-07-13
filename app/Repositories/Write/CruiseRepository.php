<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;

use App\Models\Cruise;
use App\Models\CruiseDescription;
use App\Models\CruiseImage;
use App\Models\CruiseSpecial;
use DB;

class CruiseRepository implements CRUDInterface {
	public function store( $data ) {
		DB::beginTransaction();
		try {
			$cruise = new Cruise();
			$data_cruise = (array) $data['cruise'];
			foreach ( $data_cruise as $key => $value ) {
				$cruise->$key = $value;
			}
			if ( $cruise->save() ) {
				// Create cruise descriptions
				if ( $data['cruise_descriptions'] ) {
					$cruise->cruise_descriptions()->createMany( $data['cruise_descriptions'] );
				}

				//Create cruise images
				if ( $data['images']) {
					$cruise->cruise_images()->createMany( $data['images'] );
				}

				// Create special price
				if ( $data['specials'] ) {
					$cruise->cruise_specials()->createMany( $data['specials'] );
				}
			}
			DB::commit();
		} catch ( Exception $ex ) {
			DB::rollBack();
			return false;
		}
	}

	public function update( $data, $id ) {
		$cruise = Cruise::find( $id );
		$data_cruise = (array) $data['cruise'];

		foreach ( $data_cruise as $key => $value ) {
			$cruise->$key = $value;
		}

		if ( $cruise->save() ) {

			// Update cruise descriptions
			if ( $data['cruise_descriptions']  ) {
				$cruise->cruise_descriptions()->delete();
				$cruise->cruise_descriptions()->createMany( $data['cruise_descriptions'] );
			}

			//update cruise images
			if ( $data['images'] ) {
				$cruise->cruise_images()->delete();
				$cruise->cruise_images()->createMany( $data['images'] );
			}

			// Update special price
			if ( $data['specials'] ) {
				$cruise->cruise_specials()->delete();
				$cruise->cruise_specials()->createMany( $data['specials']  );
			}

		}
	}

	public function destroy( $id ) {
		$cruise = Cruise::find( $id );
		if ( $cruise ) {
			$cruise->cruise_descriptions()->delete();
			if( $cruise->cruise_images ) {
				$cruise->cruise_images()->delete();
			}
			$cruise->cruise_images()->delete();
			$cruise->cruise_specials()->delete();
			$cruise->delete();
			// Delete specials
		}

		return "Information has been  deleted";
	}
}
<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;

use App\Models\Tour;
use App\Models\TourDescription;
use App\Models\TourImage;
use App\Models\TourSpecial;
use DB;
use Helper;
class TourRepository implements CRUDInterface {
	public function store( $data ) {
		DB::beginTransaction();
		try {
			$tour = new Tour();
			$data_tour = (array) $data['tour'];
			foreach ( $data_tour as $key => $value ) {
				$tour->$key = $value;
			}
			if ( $tour->save() ) {
				// Create tour descriptions
				if ( $data['tour_descriptions'] ) {
					$tour->tour_descriptions()->createMany( $data['tour_descriptions'] );
				}

				//Create tour images
				if ( $data['images']) {
					$tour->tour_images()->createMany( $data['images'] );
				}

				// Create special price
				if ( $data['specials'] ) {
					$tour->tour_specials()->createMany( $data['specials'] );
				}
			}
			DB::commit();
		} catch ( Exception $ex ) {
			DB::rollBack();
			return false;
		}
	}

	public function update( $data, $id ) {
		$tour = Tour::find( $id );
		$data_tour = (array) $data['tour'];

		foreach ( $data_tour as $key => $value ) {
			$tour->$key = $value;
		}

		if ( $tour->save() ) {

			// Update tour descriptions
			if ( $data['tour_descriptions']  ) {
				$tour->tour_descriptions()->delete();
				$tour->tour_descriptions()->createMany( $data['tour_descriptions'] );
			}

			//update tour images
			if ( $data['images'] ) {
				$tour->tour_images()->delete();
				$tour->tour_images()->createMany( $data['images'] );
			}

			// Update special price
			if ( $data['specials'] ) {
				$tour->tour_specials()->delete();
				$tour->tour_specials()->createMany( $data['specials']  );
			}

		}
	}

	public function destroy( $id ) {
		$tour = tour::find( $id );
		if ( $tour ) {
			$tour->tour_descriptions()->delete();
			if( $tour->tour_images ) {
				$tour->tour_images()->delete();
			}
			$tour->tour_images()->delete();
			$tour->tour_specials()->delete();
			$tour->delete();
			// Delete specials
		}

		return "Information has been  deleted";
	}
}
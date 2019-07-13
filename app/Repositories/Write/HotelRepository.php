<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;
use App\Models\HotelDescription;
use App\Models\Hotel;
use App\Models\HotelImage;
use App\Models\HotelPropertyFacility;
use DB;

class HotelRepository implements CRUDInterface {
	public function store( $data ) {
		DB::beginTransaction();
		try {
			$hotel = new Hotel();
			$data_hotel = (array) $data['hotel'];
			foreach ( $data_hotel as $key => $value ) {
				$hotel->$key = $value;
			}
			if ( $hotel->save() ) {
				// Create Hotel descriptions
				if ( $data['hotel_descriptions'] ) {
					$hotel->descriptions()->createMany( $data['hotel_descriptions'] );
				}

				//Create Hotel facilities
				if ( $data['hotel_facilities'] ) {
					$hotel->property_facilities()->createMany( $data['hotel_facilities'] );
				}

				//Create Hotel images
				if ( $data['hotel_images']) {
					$hotel->images()->createMany( $data['hotel_images'] );
				}
			}
			DB::commit();
		} catch ( Exception $ex ) {
			DB::rollBack();
			return false;
		}
	}

	public function update( $data, $id ) {
		DB::beginTransaction();
		try {

			$hotel = Hotel::find( $id );
			$data_hotel = (array) $data['hotel'];
			foreach ( $data_hotel as $key => $value ) {
				$hotel->$key = $value;
			}
			if ( $hotel->save() ) {
				
				// Create Hotel descriptions
				if ( $data['hotel_descriptions'] ) {
					$hotel->descriptions()->delete();
					$hotel->descriptions()->createMany( $data['hotel_descriptions'] );
				}

				//Create Hotel facilities
				if ( $data['hotel_facilities'] ) {
					$hotel->property_facilities()->delete();
					$hotel->property_facilities()->createMany( $data['hotel_facilities'] );
				}

				//Create Hotel images
				if ( $data['hotel_images']) {
					$hotel->images()->delete();
					$hotel->images()->createMany( $data['hotel_images'] );
				}
			}
			DB::commit();
		} catch ( Exception $ex ) {
			DB::rollBack();
			return false;
		}
	}

	public function destroy( $id ) {
		$hotel = Hotel::find( $id );
		if ( $hotel ) {
			$hotel->descriptions()->delete();
			$hotel->property_facilities()->delete();
			$hotel->images()->delete();
			$hotel->delete();
			
		}

		return "Information has been  deleted";
	}
}
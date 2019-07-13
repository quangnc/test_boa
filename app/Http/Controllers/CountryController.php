<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller {

	public function getCountries() {
		$countries = Country::all();
		return response()->json( $countries, 200 );
	}

	public function getZones( Request $request ) {
		$country_id = $request->query( 'country_id' );
		$zones      = array();

		$country = Country::find( $country_id );

		if ( $country ) {
			$zones = $country->zones;
		}

		return response()->json( $zones, 200 );
	}
}

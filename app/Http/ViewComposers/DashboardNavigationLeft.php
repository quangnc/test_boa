<?php
/**
 * Created by PhpStorm.
 * User: dangtienngoc
 * Date: 7/11/18
 * Time: 9:18 AM
 */

namespace App\Http\ViewComposers;


class DashboardNavigationLeft {
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

		$hotels = array(
			"hotel" => array( "route" => "hotel.index", "text" => "Dashboard", "icon" => "nav-icon fa fa-dashboard", "parent" => "hotel" ),
			"hotel-facility-group" => array( "route" => "hotel-facility-group.index", "text" => "Property Facilities Group", "icon" => "nav-icon fa fa-dashboard" ),
		);

		$rootData   = array(
			"/" => array( "route" => "getDashboard", "text" => "Dashboard", "icon" => "nav-icon fa fa-dashboard" ),
			"hotel" => array( "route" => "hotel", "text" => "Hotel Management", "icon" => "right fa fa-angle-left", "children" => $hotels ),
		);

		$view->with( 'dataRoutes', $rootData );
	}
}
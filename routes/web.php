<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::middleware( [ 'currency', 'setting' ] )->group( function () {
	Route::get( '/', 'HomeController@index' )->name( 'homepage' );
	Route::get( '/tin-tuc', 'NewDetailController@index' )->name( 'tintuc' );

	Route::get( '/rigistration', 'RigistrationController@index' )->name( 'rigistrations-index' );
	Route::post( '/rigistration', 'RigistrationController@store' )->name( 'rigistrations-store' );

	Route::get( '/logout', 'LoginController@logout' )->name( 'logout' );

	// contact
	Route::get( '/contact', 'ContactController@contact' )->name( 'contact' );
	Route::post( '/contact', 'ContactController@addContact' )->name( 'add-contact' );

	// blogs
	Route::get( '/blogs', 'BlogController@blogs' )->name( 'blogs' );
	Route::get( '/blog/{slug_id}', 'BlogController@detailBlog' )->name( 'detail-blog' );

	// Setting
	Route::get( '/setting/language/{id}', 'SettingController@setLanguage' )->name( 'set-language' );
	Route::get( '/setting/currency/{code}', 'SettingController@setCurrency' )->name( 'set-currency' );
});

Route::group( [ 'prefix' => 'dashboard', 'middleware' => 'auth', 'namespace' => 'Admin' ], function () {
	Route::get( '/', 'DashboardControler@index' )->name( 'getDashboard' );
	Route::resource( 'slide', 'SlideController' );
	Route::resource( 'partner', 'PartnerController' );
	
	// // Hotel group
	Route::prefix( 'hotel' )->group( function () {
		//hotel
		Route::resource( 'hotel', 'HotelController' );
		Route::resource( 'property-facility', 'HotelPropertyFacilityController' );
		Route::resource( 'property-facility-group', 'HotelPropertyFacilityGroupController' );

		//room
		Route::resource( 'room', 'RoomController' );
		Route::resource( 'room-bed-type', 'RoomBedTypeController' );
		Route::resource( 'room-type', 'RoomTypeController' );
		Route::resource( 'room-facility', 'RoomFacilityController' );
		Route::resource( 'room-facility-group', 'RoomFacilityGroupController' );
		Route::get( 'room-duplicate/{slug}', 'RoomController@getDuplicate' )->name( 'get-duplicate' );

		//review
		Route::resource( 'review', 'ReviewController' );
	} );

	// Tour group
	Route::prefix( 'tour' )->group( function () {
		//tour
		Route::resource( 'tour', 'TourController' );
		Route::resource( 'tour-type', 'TourTypeController' );
		Route::resource( 'tour-duration', 'TourDurationController' );
		Route::resource( 'destination', 'DestinationController' );
		Route::resource( 'tour-review', 'TourReviewController' );
	} );

	// Cruise group
	Route::prefix( 'cruise' )->group( function () {
		Route::resource( 'cruise', 'CruiseController' );
		Route::resource( 'cruise-review', 'CruiseReviewController' );
	} );

	// Blog group
	Route::prefix( 'blog' )->group( function () {
		Route::resource( 'blog-post', 'BlogPostController' );
		Route::resource( 'blog-category', 'BlogCategoryController' );
	} );

	// Blog group
	Route::prefix( 'booking' )->group( function () {
		Route::resource( 'booking', 'BookController' );
	} );

	Route::prefix( 'product' )->group( function () {
		Route::resource( 'product', 'ProductController' );
		Route::resource( 'application-form', 'ApplicationFormController' );
		Route::resource( 'document', 'DocumentController' );
		Route::resource( 'data-product', 'DataProductController' );
		
	} );

	// Design group
	Route::prefix( 'design' )->group( function () {
		Route::resource( 'layout', 'LayoutController' );
		Route::resource( 'module', 'ModuleController' );
	} );
	

	// Page
	Route::resource( 'page', 'PageController' );

	Route::resource( 'setting', 'SettingController' );

	Route::resource( 'admin-contact', 'ContactController' );
	Route::get( 'count-contact', 'ContactController@contactCount' );
} );

Route::get( '/{slug}', 'PageController@page' )->name( 'page' );


<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Routing for Manager Images
Route::group(['prefix' => 'upload-images'], function () {

    Route::get('directories', ['as' => 'directories', 'uses' => 'ImageManagerController@index']);

    Route::post('createDirectory', ['as' => 'createDirectory', 'uses' => 'ImageManagerController@createdirectory']);

    Route::post('removeDirectory', ['as' => 'removeDirectory', 'uses' => 'ImageManagerController@removedirectory']);

    Route::post('uploadImage', ['as' => 'uploadImage', 'uses' => 'ImageManagerController@uploadImage']);

    Route::post('fetchImage', ['as' => 'fetchImage', 'uses' => 'ImageManagerController@fetchImage']);

    Route::post('deleteImage', ['as' => 'deleteImage', 'uses' => 'ImageManagerController@deleteImage']);

    Route::post('renameImage', ['as' => 'renameImage', 'uses' => 'ImageManagerController@renameImage']);

    Route::post('clearCache', ['as' => 'clearCache', 'uses' => 'ImageManagerController@clearCache']);

});

Route::get( '/room', 'HotelController@getRooms' );
Route::get( '/zone', 'CountryController@getZones' );
Route::get( '/country', 'CountryController@getCountries' );
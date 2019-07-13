<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Helper;

class ImageManagerController extends Controller {

	private $folderImage = "images/";

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		// $this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		$directories = Storage::directories( $this->folderImage );

		$data['directories'] = array();

		foreach ( $directories as $key => $directory ) {
			$data['directories'][] = array(
				'path' => $directory,
				'name' => basename( $directory ),
			);
		}

		return response()->json( $data['directories'] );
	}

	public function createDirectory( Request $request ) {

		$folder = $request->input( 'folder' );

		$data['success'] = Storage::makeDirectory( $this->folderImage . $folder );

		$directories = Storage::directories( $this->folderImage );

		$data['directories'] = array();

		foreach ( $directories as $key => $directory ) {
			$data['directories'][] = array(
				'path' => $directory,
				'name' => basename( $directory ),
			);
		}

		return response()->json( $data['directories'] );
	}

	public function removeDirectory( Request $request ) {
		$folder = $request->input( 'folder' );

		$data['success'] = Storage::deleteDirectory( $folder );

		$directories = Storage::directories( $this->folderImage );

		$data['directories'] = array();

		foreach ( $directories as $key => $directory ) {
			$data['directories'][] = array(
				'path' => $directory,
				'name' => basename( $directory ),
			);
		}

		return response()->json( $data['directories'] );
	}

	public function clearCache( Request $request ) {

		$directorie = $request->input( 'directorie' );

		$files = Storage::deleteDirectory( 'cache' );

		$data = $this->getImages( $directorie );

		return response()->json( $data );
	}

	public function uploadImage( Request $request ) {

		$this->validate( $request, [
			'images.*' => 'image',
		] );

		$directory = $request->input( 'directory' );
		$images     = $request->file( 'images' );

		foreach ( $images as $key => $image ) {

			$name = $image->getClientOriginalName();

			// Storage::put( $directorie . '/' . $name , $image);
			// Storage::putFileAs( $directorie , $image, $name);
			$image->storeAs( $directory, $name );

		}

		$data = $this->getImages( $directory );

		return response()->json( $data );
	}

	public function fetchImage( Request $request ) {

		$directorie = $request->input( 'directorie' );

		$images = $this->getImages( $directorie );

		return response()->json( $images );
	}

	public function deleteImage( Request $request ) {
		$file       = $request->input( 'file' );
		$directorie = $request->input( 'directorie' );

		Storage::delete( $file );

		$images = $this->getImages( $directorie );

		return response()->json( $images );
	}

	public function renameImage( Request $request ) {
		$old = $request->input( 'old' );
		$new = $request->input( 'new' );

		$directorie = $request->input( 'directorie' );

		if ( ! Storage::exists( $new ) ) {
			Storage::move( $old, $new );
		}

		$images = $this->getImages( $directorie );

		return response()->json( $images );
	}

	public function getImages( $directorie ) {

		$allowedExts = array( "gif", "jpeg", "jpg", "png", "svg" );

		$files = Storage::files( $directorie );

		$images = array();

		foreach ( $files as $key => $file ) {
			$name = basename( $file );

			$ext      = strtolower( pathinfo( $name, PATHINFO_EXTENSION ) );
			$filename = pathinfo( $name, PATHINFO_FILENAME );

			if ( in_array( $ext, $allowedExts ) ) {

				$cache = Storage::url( $file );

				if ( $ext != "svg" ) {
					$cache = Helper::resize( $file, 134, 90 );
				}

				$images[] = array(
					'url'      => Storage::url( $file ),
					'image'    => $file,
					'thumb'    => $cache,
					'name'     => $name,
					'ext'      => $ext,
					'filename' => $filename,
				);

			}

		}

		return $images;

	}

}

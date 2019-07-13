<?php

namespace App\Helpers;

use Image;
use Storage;
use File;

class Helper
{
	/**
	 * @param string $img
	 * @param int $width
	 * @param int $height
	 *
	 * @return string
	 */
	public static function resize( $img = "", $width = 100, $height = 100 ) {
		$thumb     = "cache/" . $width . "x" . $height . "/" . $img;
		$realImage = 'upload/' . $img;

		if ( ! Storage::exists( $thumb ) && File::exists( 'upload/' . $img ) ) {

			$image = Image::make( public_path( $realImage ) )->resize( $width, $height );
			Storage::put( $thumb, $image->encode() );

		}

		return Storage::url( $thumb );
	}

	public static function url($img = '') {
		return Storage::url( $img );
	}

	public static function vn_to_str($str) 
	{
		$unicode = array(
			'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
			'd'=>'đ,Đ',
			'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
			'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
			'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
			'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
			'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ'
			);
			
			foreach($unicode as $nonUnicode=>$uni){
				$str = preg_replace("/($uni)/i", $nonUnicode, $str);
			}
			$str = str_replace(' ','-',$str);
			return strtolower($str);
	}

	public static function text_limit( $str, $limit=10 )
	{
		if(stripos($str," ")){
			$ex_str = explode(" ",$str);
		if(count( $ex_str )>$limit){
			$str_s = "";
			for( $i=0; $i < $limit; $i++ ){
				$str_s .= $ex_str[$i]." ";
			}
			return $str_s;
		} else {
			return $str;
		}
		} else {
			return $str;
		}
	}
}
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

	Route::get( '/nop-don-dang-ky-online', 'RigistrationController@apply' )->name( 'apply' );

	Route::get( '/rigistration', 'RigistrationController@index' )->name( 'rigistrations-index' );
	Route::post( '/rigistration', 'RigistrationController@store' )->name( 'rigistrations-store' );

	Route::get( '/logout', 'LoginController@logout' )->name( 'logout' );

	// contact
	Route::get( '/contact', 'ContactController@contact' )->name( 'contact' );
	Route::post( '/contact', 'ContactController@addContact' )->name( 'add-contact' );

	// blogs
	Route::get( '/blogs', 'BlogController@blogs' )->name( 'blogs' );
	Route::get( '/blog/{slug_id}', 'BlogController@detailBlog' )->name( 'detail-blog' );

	//1. Công nhận năng lực phòng thí nghiệm //LaboratoriesController
	//2. Công nhận năng lực phòng thí nghiệm y tế  // Medical laboratories
	//3. Công nhận năng lực tổ chức giám định  // InspectionBodies
	//4. Công nhận tổ chức chứng nhận // Certification

	//phong thi nghiem
	Route::get( '/phong-thi-nghiem/gioi-thieu', 'LaboratoriesController@introduction' )->name( 'laboratories-introduction' );
	Route::get( '/phong-thi-nghiem', 'LaboratoriesController@index' )->name( 'laboratories-index' );
	Route::get( '/phong-thi-nghiem/${id}', 'LaboratoriesController@detail' )->name( 'laboratories-detail' );
	Route::get( '/phong-thi-nghiem/tim-kiem', 'LaboratoriesController@search' )->name( 'laboratories-search' );
	Route::get( '/phong-thi-nghiem/bieu-mau-phong-thi-nghiem', 'LaboratoriesController@applicationForm' )->name( 'laboratories-application' );
	Route::get( '/phong-thi-nghiem/tai-lieu-phong-thi-nghiem', 'LaboratoriesController@document' )->name( 'laboratories-document' );
	
	//to-chuc-chung-nhan
	Route::get( '/to-chuc-chung-nhan/gioi-thieu', 'CertificationController@introduction' )->name( 'certification-introduction' );
	Route::get( '/to-chuc-chung-nhan', 'CertificationController@index' )->name( 'certification-index' );
	Route::get( '/to-chuc-chung-nhan/${id}', 'CertificationController@detail' )->name( 'certification-detail' );
	Route::get( '/to-chuc-chung-nhan/tim-kiem-chung-nhan', 'CertificationController@search' )->name( 'certification-search' );
	Route::get( '/to-chuc-chung-nhan/bieu-mau-chung-nhan', 'CertificationController@applicationForm' )->name( 'certification-application' );
	Route::get( '/to-chuc-chung-nhan/tai-lieu-chung-nhan', 'CertificationController@document' )->name( 'certification-document' );
	
	//to-chuc-giam-dinh
	Route::get( '/to-chuc-giam-dinh/gioi-thieu', 'InspectionBodiesController@introduction' )->name( 'inspectionBodies-introduction' );
	Route::get( '/to-chuc-giam-dinh', 'InspectionBodiesController@index' )->name( 'inspectionBodies-index' );
	Route::get( '/to-chuc-giam-dinh/${id}', 'InspectionBodiesController@detail' )->name( 'inspectionBodies-detail' );
	Route::get( '/to-chuc-giam-dinh/tim-kiem-giam-dinh', 'InspectionBodiesController@search' )->name( 'inspectionBodies-search' );
	Route::get( '/to-chuc-giam-dinh/bieu-mau-giam-dinh', 'InspectionBodiesController@applicationForm' )->name( 'inspectionBodies-application' );
	Route::get( '/to-chuc-giam-dinh/tai-lieu-giam-dinh', 'InspectionBodiesController@document' )->name( 'inspectionBodies-document' );
	
	//Medical laboratories 
	Route::get( '/phong-thi-nghiem-y-te/gioi-thieu', 'MedicalController@introduction' )->name( 'medical-introduction' );
	Route::get( '/phong-thi-nghiem-y-te', 'MedicalController@index' )->name( 'medical-index' );
	Route::get( '/phong-thi-nghiem-y-te/${id}', 'MedicalController@detail' )->name( 'medical-detail' );
	Route::get( '/phong-thi-nghiem-y-te/tim-kiem', 'MedicalController@search' )->name( 'medical-search' );
	Route::get( '/phong-thi-nghiem-y-te/bieu-mau-phong-thi-nghiem', 'MedicalController@applicationForm' )->name( 'medical-application' );
	Route::get( '/phong-thi-nghiem-y-te/tai-lieu-phong-thi-nghiem', 'MedicalController@document' )->name( 'medical-document' );
	
	//new
	Route::get( '/thong-tin/{id}', 'InformationController@detail' )->name( 'information' );
	Route::get( '/thong-tin/tin-tuc/{id}/{cate}', 'InformationController@detailPost' )->name( 'detailPost' );

	// 1. tin tuc (news)
	// 2. dao tao (tranning)
	Route::get( '/list-tin-tuc', 'InformationController@getListNews' )->name( 'getListNews' );
	Route::get( '/list-tin-dao-tao', 'InformationController@getListTrainning' )->name( 'getListTrainning' );

	// Setting
	Route::get( '/setting/language/{id}', 'SettingController@setLanguage' )->name( 'set-language' );
	Route::get( '/setting/currency/{code}', 'SettingController@setCurrency' )->name( 'set-currency' );
});

Route::group( [ 'prefix' => 'dashboard', 'middleware' => 'auth', 'namespace' => 'Admin' ], function () {
	Route::get( '/', 'DashboardController@index' )->name( 'getDashboard' );
	Route::resource( 'slide', 'SlideController' );
	Route::resource( 'partner', 'PartnerController' );
	Route::resource( 'support', 'SupportController' );
	
	// Blog group
	Route::prefix( 'blog' )->group( function () {
		Route::resource( 'blog-post', 'BlogPostController' );
		Route::resource( 'blog-category', 'BlogCategoryController' );
	} );

	// Menu group
	Route::prefix( 'menu' )->group( function () {
		Route::resource( 'menu', 'MenuController' );
		Route::resource( 'cate-menu', 'CateMenuController' );
	} );

	Route::prefix( 'product' )->group( function () {
		Route::resource( 'product', 'ProductController' );
		Route::resource( 'application-form', 'ApplicationFormController' );
		Route::resource( 'document', 'DocumentController' );
		Route::resource( 'data-product', 'DataProductController' );
		Route::resource( 'upload-file', 'UploadFileController' );
		
	} );

	// Design group
	Route::prefix( 'design' )->group( function () {
		Route::resource( 'layout', 'LayoutController' );
		Route::resource( 'module', 'ModuleController' );
	} );
	
	// Page
	// Route::resource( 'page', 'PageController' );

	Route::resource( 'setting', 'SettingController' );

	Route::resource( 'admin-contact', 'ContactController' );
	Route::get( 'count-contact', 'ContactController@contactCount' );
} );



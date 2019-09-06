<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UploadFile;
use App\Services\UploadFileService;
use App\Repositories\Read\ConfigSetting;
use Validator;
class UploadFileController extends Controller
{
    use ConfigSetting;
    protected $_uploadFileService;

	public function __construct( UploadFileService $uploadFileService ) {
		$this->_uploadFileService = $uploadFileService;
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $language = config('app.language', $this->adminLanguage());
        $data['uploadFiles'] = $this->_uploadFileService->index();
		$data['page_title']  = "upload-file";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'upload-file.index', 'title' => 'Hotels', 'active' => true ),
		);
		$data['actions']     = [
			array(
				'className' => "btn btn-primary",
				'text'      => 'New Upload File',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route( 'upload-file.create' )
			)
        ];
		return view( 'admin.upload-file.index', compact('data', 'language') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_blog_post = $this->_uploadFileService->create();
		$blog_post_categories = $data_blog_post['blog_cate'];
        $form              = "uploadFile-form";
		$data['page_title']  = "Create uploadFile";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'upload-file.index', 'title' => 'uploadFile', 'active' => true ),
		);
		$data['action']      = route( 'upload-file.store' );
		$data['form']        = $form;

		$data['actions'] = [
			array(
				'className' => "btn btn-default",
				'text'      => 'Back',
				'id'        => '',
				'tag'       => 'a',
				'href'      => route( 'upload-file.index' )
			),
			array(
				'className' => "btn btn-primary save-form",
				'form'      => $form,
				'text'      => 'Save',
				'id'        => '',
				'tag'       => 'button'
			),
		];

		// Init data
		$uploadFile = array(
			'image'      => null,
			'images'     => '[]',
			'sort_order' => null,
			'status' => false,
		);
		$data['status'] = "";
		$images = '[]';
		return view( 'admin.upload-file.upload-file', compact( 'data', 'images', 'uploadFile', 'blog_post_categories') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
		$this->_uploadFileService->store($request->all() );

		return redirect()->route( 'upload-file.index' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(uploadFile $uploadFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $blog_post_categories = $data_blog_post['blog_cate'];
        $data['uploadFile'] = $this->_uploadFileService->edit( $id );
        $form = "uploadFile_form";
        $data['id'] = $id;
        $data['page_title']  = "Edit uploadFile";
        $data['breadcrumbs'] = array(
            array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
            array( 'router' => 'upload-file.index', 'title' => 'Edit uploadFile', 'active' => true ),
        );
        $data['action']      = route( 'upload-file.update', [ 'id' => $id ] );
        $data['form']        = $form;

        $data['actions'] = [
            array(
                'className' => "btn btn-default",
                'text'      => 'Back',
                'id'        => '',
                'tag'       => 'a',
                'href'      => route( 'upload-file.index' )
            ),
            array(
                'className' => "btn btn-primary save-form",
                'form'      => $form,
                'text'      => 'Save',
                'id'        => '',
                'tag'       => 'button'
            ),
		];
		return view( 'admin.upload-file.upload-file', compact( 'data', 'blog_post_categories' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
		$this->_uploadFileService->update( $data[0], $id );
		return redirect()->route( 'upload-file.index' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->_uploadFileService->destroy( $id );
		return redirect()->route( 'upload-file.index' )->with( 'success', $data );
    }
}

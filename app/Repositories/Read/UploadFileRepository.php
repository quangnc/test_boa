<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;

use App\Models\UploadFile;
use App\Models\Product;

class UploadFileRepository implements CRUDInterface {
    use ConfigSetting;
    public function listBlogCategory()
    {
        $data['blog_cate'] = [];
        $blog_cate = Product::orderBy('sort_order', 'DESC')->get();
        if($blog_cate) {
            foreach($blog_cate as $blog_cate) {
                $blog_cate_description = $blog_cate->product_descriptions()
                                                    ->where('language_id', $this->adminLanguage())
                                                    ->first();
                $data['blog_cate'][] = $blog_cate_description;
            }
        }
        return $data;
    }

    public function index() 
    {
      $file = UploadFile::all();
		return UploadFile::all();
    }
    
    public function edit( $id ) 
    {
        $UploadFile = UploadFile::find($id);
        
		return array($UploadFile);
    }

}
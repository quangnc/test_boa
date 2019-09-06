<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class UploadFile extends Model
{
    protected $table = 'upload_files';
    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}

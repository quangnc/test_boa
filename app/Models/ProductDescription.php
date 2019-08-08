<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDescription extends Model
{
    public $timestamps = false;
    protected $fillable = [ 'name', 'language_id', 'description', 'content', 'meta_title', 'meta_description', 'meta_keyword' ];
    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}

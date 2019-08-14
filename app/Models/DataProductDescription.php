<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataProductDescription extends Model
{
    public $timestamps = false;
    protected $table = 'data_product_description';
    protected $fillable = [ 'name', 'language_id', 'vacis', 'file', 'field', 'city', 'place' ];
    
    public function data_product()
    {
        return $this->belongsTo('App\Models\DataProduct', 'data_product_id');
    }
}

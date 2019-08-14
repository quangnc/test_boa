<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataProduct extends Model
{
    protected $primaryKey = 'data_product_id';
    protected $table = 'data_products';

    
    public function data_product_descriptions()
    {
        return $this->hasMany( 'App\Models\DataProductDescription', 'data_product_id' );
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}

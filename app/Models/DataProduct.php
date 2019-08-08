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

    // public function blog_categories()
    // {
    //     return $this->hasOne( 'App\Models\BlogCategory', 'blog_category_id', 'blog_category_id' );
    // }
}

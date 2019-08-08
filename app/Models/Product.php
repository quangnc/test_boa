<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id';
    
    public function product_descriptions()
    {
        return $this->hasMany( 'App\Models\ProductDescription', 'product_id' );
    }
    
    public function application_form()
    {
        return $this->hasMany( 'App\Models\ApplicationsForm', 'product_id' );
    }
    
}

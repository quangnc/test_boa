<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'documents';
    protected $primaryKey = 'document_id';

    public function document_descriptions()
    {
        return $this->hasMany( 'App\Models\DocumentDescription', 'document_id' );
    }

    public function product()
    {
        return $this->hasOne( 'App\Models\Product', 'product_id', 'product_id' );
    }
}

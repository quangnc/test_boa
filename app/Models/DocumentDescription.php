<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentDescription extends Model
{
    public $timestamps = false;
    protected $table = 'document_desc';
    
    protected $fillable = [ 'name', 'language_id', 'description' ];
    public function document()
    {
        return $this->belongsTo('App\Models\Document', 'document_id');
    }
}

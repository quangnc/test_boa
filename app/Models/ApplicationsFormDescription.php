<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationsFormDescription extends Model
{
    public $timestamps = false;
    protected $table = 'application_form_descriptions';
    
    protected $fillable = [ 'name', 'language_id', 'description' ];
    public function application_form()
    {
        return $this->belongsTo('App\Models\ApplicationsForm', 'application_form_id');
    }
}

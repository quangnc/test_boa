<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationForm extends Model
{
    protected $table = 'applications_form';
    protected $primaryKey = 'application_form_id';

    public function application_form_descriptions()
    {
        return $this->hasMany( 'App\Models\ApplicationsFormDescription', 'application_form_id' );
    }

    public function product()
    {
        return $this->hasOne( 'App\Models\Product', 'product_id', 'product_id' );
    }
}

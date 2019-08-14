<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    protected $primaryKey = 'support_id';
    
    public function support_descriptions()
    {
        return $this->hasMany( 'App\Models\SupportDescription', 'support_id' );
    }
}

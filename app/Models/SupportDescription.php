<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupportDescription extends Model
{
    public $timestamps = false;
    protected $fillable = [ 'name', 'language_id', 'title', 'support_id' ];
    public function support()
    {
        return $this->belongsTo('App\Models\Support', 'support_id');
    }
}

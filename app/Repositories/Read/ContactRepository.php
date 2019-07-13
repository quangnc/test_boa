<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\ContactRepositoryInterface;
use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface {

    public static function index() 
    {
        $data['contact'] = [];
        $data['contact']    = Contact::all();
		return $data;
    }

    public static function show( $id )
    {
        return Contact::find($id);
    }

    public static function contactCount()
    {
        $data['count_contact'] = Contact::where('read', 0)->count();
        return $data;
    }

}
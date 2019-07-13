<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\ContactRepositoryInterface;
use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface {

    public static function destroy( $id )
    {
        $contact = Contact::find($id)->delete();
        return "Information has been  deleted";
    }

    public static function updateRead($id)
    {
        $contact = Contact::find($id);
        $contact->read = 1;
        $contact->save();
    }
}
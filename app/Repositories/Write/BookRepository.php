<?php

namespace App\Repositories\Write;

use App\Repositories\Contracts\Write\CRUDInterface;
use App\Models\Book;

class BookRepository implements CRUDInterface {

    public function destroy( $id )
    {
        $Book = Book::find($id)->delete();
        return "Information has been  deleted";
    }

    public function store( $data ) {
    }

    public function update( $data, $id ) {
    }
}
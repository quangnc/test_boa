<?php
namespace App\Services;

// gọi đến Repository
use App\Repositories\Read\BookRepository as Read;
use App\Repositories\Write\BookRepository as Write;

class BookService 
{
    protected $_read;
    protected $_write;
    public function __construct( read $read, Write $write) {
        $this->_read = $read;
        $this->_write = $write;
	}
	
	public function index()
	{
		return $this->_read->index();
	}
	
	public function show( $id )
	{
		return $this->_read->show( $id );
	}

    public function destroy($id)
    {
        return $this->_write->destroy($id);
    }
}
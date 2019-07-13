<?php
namespace App\Services;

// gọi đến Repository
use App\Repositories\Read\HotelRepository as Read;
use App\Repositories\Write\HotelRepository as Write;

class HotelService implements CRUDServiceInterface
{
    protected $_read;
    protected $_write;
    public function __construct(Read $read, Write $write) {
        $this->_read = $read;
        $this->_write = $write;
    }

    public function store($data)
    {
        return $this->_write->store($data);
    }

    public function index() 
    {
        return $this->_read->index();
    }

    public function edit($id)
    {
        return $this->_read->edit($id);
    }

    public function create()
    {
        return $this->_read->create();
    }

    public function update($data, $id)
    {
        return $this->_write->update($data, $id);
    }

    public function destroy($id)
    {
        return  $this->_write->destroy($id);
    }
}
<?php
namespace App\Services;

// gọi đến Repository
use App\Repositories\Read\CruiseRepository as Read;
use App\Repositories\Write\CruiseRepository as Write;

class CruiseService implements CRUDServiceInterface
{
    protected $_read;
    protected $_write;
    public function __construct( Read $read, Write $write) {
        $this->_read = $read;
        $this->_write = $write;
	}
	
	public function index()
	{
		$data = $this->_read->index();
		return $data;
	}

    public function create()
    {
		$data['destinations'] = $this->_read->listDestinations();
		$data['specials'] = "[]";
        return $data;
	}

	public function store( $data )
    {
        return $this->_write->store($data);;
	}

	public function edit( $id ) 
	{
		$data = $this->_read->edit($id);
		$data['destinations'] = $this->_read->listdestinations();
        //data cruise specials
		$data['specials'] = "[]";
		if ($data['cruise']->cruise_specials) {
			$data['specials'] = $data['cruise']->cruise_specials;
		}
		$data['images'] = "[]";
		if ($data['cruise']->cruise_images) {
			$data['images'] = $data['cruise']->cruise_images;
		}
 		return $data;
	}

	public function update($data, $id)
    {
        return $this->_write->update($data, $id);
    }
	
	public function destroy($id)
    {
        return $this->_write->destroy($id);;
	}
}
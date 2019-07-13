<?php
namespace App\Services;

// gọi đến Repository
use App\Repositories\Read\TourRepository as Read;
use App\Repositories\Write\TourRepository as Write;

class TourService implements CRUDServiceInterface
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
		$data['tour_types'] = $this->_read->listTourTypes();
		$data['tour_durations'] = $this->_read->listDurations();
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
		$data['tour_types'] = $this->_read->listTourTypes();
		$data['tour_durations'] = $this->_read->listdurations();
		$data['destinations'] = $this->_read->listdestinations();
        //data Tour specials
		$data['specials'] = "[]";
		if ($data['tour']->tour_specials) {
			$data['specials'] = $data['tour']->tour_specials;
		}
		$data['images'] = "[]";
		if ($data['tour']->tour_images) {
			$data['images'] = $data['tour']->tour_images;
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
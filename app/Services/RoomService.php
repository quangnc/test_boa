<?php
namespace App\Services;

// gọi đến Repository
use App\Repositories\Read\RoomRepository as ReadRoomService;
use App\Repositories\Write\RoomRepository as WriteRoomService;

class RoomService implements CRUDServiceInterface
{
    protected $_readRoom;
    protected $_writeRoom;
    public function __construct( ReadRoomService $readRoom, WriteRoomService $writeRoom) {
        $this->_readRoom = $readRoom;
        $this->_writeRoom = $writeRoom;
	}
	
	public function index()
	{
		$data = $this->_readRoom->index();
		return $data;
	}

    public function create()
    {
		$data['facilities'] = $this->_readRoom->facilities();
		$data['room_type'] = $this->_readRoom->listRoomType();
		$data['bed_type'] = $this->_readRoom->listBedType();
		$data['hotel'] = $this->_readRoom->listHotels();
		$data['specials'] = "[]";
        return $data;
	}

	public function store( $data )
    {
        $dataHotel = $this->_writeRoom->store($data);
        return $dataHotel;
	}

	public function edit( $id ) 
	{
		$data = $this->_readRoom->edit($id);
		$data['facilities'] = $this->_readRoom->facilities();
		$data['room_type'] = $this->_readRoom->listRoomType();
		$data['bed_type'] = $this->_readRoom->listBedType();
		$data['hotel'] = $this->_readRoom->listHotels();
        //data room specials
		$data['specials'] = "[]";
		if ($data['room']->room_specials) {
			$data['specials'] = $data['room']->room_specials->get();
		}
		$data['images'] = "[]";
		if ($data['room']->images) {
			$data['images'] = $data['room']->images;
		}
 		return $data;
	}

	public function update($data, $id)
    {
        return $this->_writeRoom->update($data, $id);
    }
	
	public function destroy($id)
    {
        $dataHotel = $this->_writeRoom->destroy($id);
        return $dataHotel;
	}
	
	public function getDuplicate($id)
	{
		$data = $this->_readRoom->edit($id);
		$data['facilities'] = $this->_readRoom->facilities();
		$data['room_type'] = $this->_readRoom->listRoomType();
		$data['bed_type'] = $this->_readRoom->listBedType();
		$data['hotel'] = $this->_readRoom->listHotels();
        //data room specials
		$data['specials'] = "[]";
		if ($data['room']->room_specials) {
			$data['specials'] = $data['room']->room_specials->get();
		}
        return $data;
	}

}
<?php
namespace App\Services;

// gọi đến Repository
use App\Repositories\Read\MenuRepository as Read;
use App\Repositories\Write\MenuRepository as Write;

class MenuService implements CRUDServiceInterface
{
    protected $_read;
    protected $_write;
    public function __construct( Read $read, Write $write) {
        $this->_read = $read;
        $this->_write = $write;
	}
	
	public function index()
	{
		return $this->_read->index();
	}
	
	public function create()
    {
        return $this->_read->listBlogCategory();
	}

	public function store( $data )
    {
        return $this->_write->store($data);
	}

	public function edit( $id ) 
	{
		$data['blog_category'] = $this->_read->listBlogCategory();
		$data = $this->_read->edit( $id );
		return $data;
	}

	public function update($data, $id)
    {
        return $this->_write->update($data, $id);
    }
	
	public function destroy($id)
    {
        return $this->_write->destroy($id);
	}


}
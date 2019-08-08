<?php
namespace App\Services;

// gọi đến Repository
use App\Repositories\Contracts\Read\ContactRepositoryInterface as ReadContactRepository;
use App\Repositories\Contracts\Write\ContactRepositoryInterface as WriteContactRepository;

class ContactService 
{
    protected $_readContact;
    protected $_writeContact;
    public function __construct( ReadContactRepository $readContact, WriteContactRepository $writeContact) {
        $this->_readContact = $readContact;
        $this->_writeContact = $writeContact;
	}
	
	public function index()
	{
		$data = $this->_readContact::index();

		$data['page_title']  = "List Contact";
		$data['breadcrumbs'] = array(
			array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
			array( 'router' => 'admin-contact.index', 'title' => 'List Contact', 'active' => true ),
		);
		return $data;
	}
	
	public function show( $id )
	{
		$form = "admin-contact-form";
		$data['contact'] = $this->_readContact::show( $id );
        $data['page_title']  = "Detail Contact";
        $data['breadcrumbs'] = array(
            array( 'router' => 'getDashboard', 'title' => 'Dashboard', 'active' => false ),
            array( 'router' => 'admin-contact.index', 'title' => 'Detail Contact', 'active' => true ),
        );
        $data['action']      = route( 'admin-contact.update', [ 'id' => $id ] );
        $data['form']        = $form;

        $data['actions'] = [
            array(
                'className' => "btn btn-default",
                'text'      => 'Back',
                'id'        => '',
                'tag'       => 'a',
                'href'      => route( 'admin-contact.index' )
            )
		];
		return $data;
	}

    public function destroy($id)
    {
        $dataBlogCategory = $this->_writeContact::destroy($id);
        return $dataBlogCategory;
    }
    
    public function updateRead($id)
    {
        return $this->_writeContact::updateRead($id);
    }

    public function contactCount()
    {
        return $this->_readContact::contactCount();
    }
}
<?php
namespace App\Services;

// gọi đến Repository
use App\Repositories\Contracts\Read\FacilityGroupRepositoryInterface as ReadFacilityGroup;
use App\Repositories\Contracts\Write\FacilityGroupRepositoryInterface as WriteFacilityGroup;

class FacilityGroupService 
{
    protected $_readFacilityGroup;
    protected $_writeFacilityGroup;
    public function __construct(ReadFacilityGroup $readFacilityGroup, WriteFacilityGroup $writeFacilityGroup) {
        $this->_readFacilityGroup = $readFacilityGroup;
        $this->_writeFacilityGroup = $writeFacilityGroup;
    }

    public function index() 
    {
        $data = $this->_readFacilityGroup::index();
        return $data;
    }

    public function create( $request )
    {
        $returnData = [
            'data' => [],
            'errors' => []
        ];
        
        $dataFacilityGroup = $this->_writeFacilityGroup::create($request);
        $returnData['data'] = $dataFacilityGroup;
        return $dataFacilityGroup;
    }

    public function edit($id)
    {
        $dataFacilityGroup = $this->_readFacilityGroup::edit($id);
        return $dataFacilityGroup;
    }

    public function update($request, $id)
    {
        $dataFacilityGroup = $this->_writeFacilityGroup::update($request, $id);
        return $dataFacilityGroup;
    }

    public function destroy($id)
    {
        $dataFacilityGroup = $this->_writeFacilityGroup::destroy($id);
        return $dataFacilityGroup;
    }
}
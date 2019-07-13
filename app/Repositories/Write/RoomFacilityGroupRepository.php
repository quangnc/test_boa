<?php

namespace App\Repositories\Write;

use App\Models\FacilityGroup;
use App\Repositories\Contracts\Write\CRUDInterface;
use DB;

class RoomFacilityGroupRepository implements CRUDInterface
{

    public function store($data)
    {
        DB::beginTransaction();
        try {

            $facility_groups = new FacilityGroup();
            $facility_group = (array) $data['facility_group'];
            foreach ( $facility_group as $key => $value ) {
                $facility_groups->$key = $value;
            }
            if ($facility_groups->save()) {
                
                // Create room facility group description
                if ($data['facility_group_descriptions']) {
                    $facility_groups->facility_group_descriptions()->createMany($data['facility_group_descriptions']);
                }
            }
            DB::commit();
        } catch (Exception $ex) {
            DB::rollBack();

            return false;
        }
    }

    public function update($data, $id)
    {
        DB::beginTransaction();
        try {
            $facility_group = FacilityGroup::find($id);
            $data_facility_group = (array) $data['facility_group'];
            foreach ( $data_facility_group as $key => $value ) {
                $facility_group->$key = $value;
            }
            if ($facility_group->save()) {
                // Update room facility group description
                if ($data['facility_group_descriptions']) {
                    $facility_group->facility_group_descriptions()->delete();
                    $facility_group->facility_group_descriptions()->createMany($data['facility_group_descriptions']);
                }
            }
            DB::commit();
        } catch (Exception $ex) {
            DB::rollBack();

            return false;
        }
    }

    public function destroy($id)
    {
        $facility_group = FacilityGroup::find($id);
        if ($facility_group) {
            if( $facility_group->facility_group_descriptions ) {
                $facility_group->facility_group_descriptions()->delete();
            }
            $facility_group->delete();
        }
        return "Information has been  deleted";
    }

}

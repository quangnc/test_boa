<div class="accordion" id="accordion">
    @isset($hotel_facilities)
        @foreach ($hotel_facilities as $hotel_facilities)
            <div class="card">
                <div class="card-header" id="heading{{ $hotel_facilities['group_name']->property_facility_group_id }}">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $hotel_facilities['group_name']->property_facility_group_id }}" aria-expanded="true" aria-controls="collapse{{ $hotel_facilities['group_name']->property_facility_group_id }}">
                            {{ $hotel_facilities['group_name']->name }}
                        </button>
                    </h5>
                </div>

                <div id="collapse{{ $hotel_facilities['group_name']->property_facility_group_id }}" class="collapse show" aria-labelledby="heading{{ $hotel_facilities['group_name']->property_facility_group_id }}" data-parent="#accordion">
                    <div class="card-body">
                        @foreach ($hotel_facilities['facility_name'] as $facility_group)
							<?php $property_facility_id = $facility_group->property_facility_id ?>
                            <p>
                                <checkbox 
                                    input-name="hotel_facilities" 
                                    input-key="{{ $property_facility_id }}" 
                                    input-label="{{ $facility_group->name }}"
                                    input-facility = "property_facility_id"
                                    value="{{ isset($hotel_facility_edit) ? in_array($property_facility_id, $hotel_facility_edit) : "" }}">
                                </checkbox> <br />
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    @endisset
</div>

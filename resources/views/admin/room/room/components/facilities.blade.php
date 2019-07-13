
<div class="accordion" id="accordion">
    @isset($facilities)
        @foreach ($facilities as $facilities)
            <div class="card">
                <div class="card-header" id="heading{{ $facilities['facility_group_name']->facility_group_id }}">
                    <h5 class="mb-0">
                        <button 
                            class="btn btn-link" 
                            type="button" 
                            data-toggle="collapse" 
                            data-target="#collapse{{ $facilities['facility_group_name']->facility_group_id }}" 
                            aria-expanded="true" 
                            aria-controls="collapse{{ $facilities['facility_group_name']->facility_group_id }}"
                        >
                            {{ $facilities['facility_group_name']->name }}
                        </button>
                    </h5>
                </div>

                <div id="collapse{{ $facilities['facility_group_name']->facility_group_id }}" class="collapse show" aria-labelledby="heading{{ $facilities['facility_group_name']->facility_group_id }}" data-parent="#accordion">
                    <div class="card-body">
                        @foreach ($facilities['facility_name'] as $room_groups)
							<?php $facility_id = $room_groups->facility_id; ?>
                            <checkbox 
                                input-name="room_facilities" 
                                input-key="{{ $facility_id }}" 
                                input-label="{{ $room_groups->name }}" 
                                input-facility = "facility_id"
                                value="{{ isset($facility_groups) ? in_array($facility_id, $facility_groups) : "" }}">
                            </checkbox> <br />
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    @endisset
</div>
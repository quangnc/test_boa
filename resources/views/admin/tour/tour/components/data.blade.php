<?php
    $arr = [ 1 => 'Enable', 0 => 'Disable'];
?>  
{{-- Tour type --}}
<div class="form-group">
    <label>Tour Type</label>
    <select class="form-control" name="tour[tour_type_id]">
        @isset($tour_types)
        @foreach($tour_types as $key => $tour_type)
            <option value="{{ $tour_type['tour_type']->tour_type_id }}" 
                {{ isset($tours->tour_type_id) && $tours->tour_type_id == $tour_type['tour_type']->tour_type_id || old('tour.tour_type_id') ? 'selected' : "" }}>
                {{ $tour_type['tour_type_description']->name }}
            </option>
        @endforeach 
        @endisset
    </select>
</div>

{{-- Tour Duration --}}
<div class="form-group">
    <label>Tour Duration</label>
    <select class="form-control" name="tour[tour_duration_id]">
        @isset($tour_ducations)
        @foreach($tour_ducations as $key => $tour_ducation)
            <option value="{{ $tour_ducation['tour_duration']->tour_duration_id }}" 
                {{ isset($tours->tour_duration_id) && $tours->tour_duration_id == $tour_ducation['tour_duration']->tour_duration_id || old('tour.tour_duration_id') ? 'selected' : "" }}>
                {{ $tour_ducation['tour_duration_description']->name }}
            </option>
        @endforeach 
        @endisset
    </select>
</div> 


{{-- Destination --}}
<div class="form-group">
    <label>Destination</label>
    <select class="form-control" name="tour[destination_id]">
        @isset($destinations)
        @foreach($destinations as $key => $destination)
            <option value="{{ $destination['destination']->destination_id }}" 
                {{ isset($tours->destination_id) && $tours->destination_id == $destination['destination']->destination_id ? 'selected' || old('tour.destination_id') : "" }}>
                {{ $destination['destination_description']->name }}
            </option>
        @endforeach 
        @endisset
    </select>
</div>

{{-- Code --}}
<div class="form-group">
    <label for="txtCode">Code</label>
    <input 
        value="{{ $tours->code or old('tour.code') }}" 
        type="text" 
        class="form-control" 
        id="txtCode" 
        placeholder="Tour Code ..." 
        name="tour[code]" 
    />
</div>

{{-- Price --}}
<div class="form-group">
    <label for="txtPrice">Price</label>
    <input 
        value="{{ $tours->price or old('tour.price') }}" 
        type="number" 
        class="form-control" 
        id="txtPrice" 
        placeholder="Price ..." 
        name="tour[price]" 
    />
</div>

{{-- Price --}}
<div class="form-group">
    <label for="txtTourValid"> Tour Valid </label>
    <input
        value="{{ $tours->tour_valid or old('tour.tour_valid') }}"
        type="date" 
        name="tour[tour_valid]" 
        class="form-control"
        placeholder="Tour Valid ..." 
        id="txtTourValid"
    >
</div>
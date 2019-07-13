<?php
    $arr = [ 1 => 'Enable', 0 => 'Disable'];
?>  

{{-- Destination --}}
<div class="form-group">
    <label>Destination</label>
    <select class="form-control" name="cruise[destination_id]">
        @isset($destinations)
        @foreach($destinations as $key => $destination)
            <option value="{{ $destination['destination']->destination_id }}" 
                {{ isset($cruises->cruise_type_id) && $cruises->cruise_type_id == $destination['destination']->destination_id || old('cruise.destination_id') ? 'selected' : "" }}>
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
        value="{{ $cruises->code or old('cruise.code') }}" 
        type="text" 
        class="form-control" 
        id="txtCode" 
        placeholder="Cruise Code..." 
        name="cruise[code]" 
    />
</div>

{{-- Price 2 Day --}}
<div class="form-group">
    <label for="txtPrice2Day">Price 2 Day</label>
    <input 
        value="{{ $cruises->price_2_day or old('cruise.price_2_day') }}" 
        type="number" 
        class="form-control" 
        id="txtPrice2Day" 
        placeholder="Price 2 Day..." 
        name="cruise[price_2_day]" 
    />
</div>

{{-- Price 3 Day--}}
<div class="form-group">
    <label for="txtPrice3Day">Price 3 day</label>
    <input 
        value="{{ $cruises->price_3_day or old('cruise.price_3_day') }}" 
        type="number" 

        class="form-control" 
        id="txtPrice3Day" 
        placeholder="Price 3 Day..." 
        name="cruise[price_3_day]" 
    />
</div>

{{--  Cruise Star --}}
<div class="form-group">
    <label for="txtCruiseStar">Cruise Star</label>
    <input 
        value="{{ $cruises->cruise_star or old('cruise.cruise_star') }}" 
        type="number" 
        max="5"
        class="form-control" 
        id="txtCruiseStar" 
        placeholder="Cruise Star..." 
        name="cruise[cruise_star]" 
    />
</div>


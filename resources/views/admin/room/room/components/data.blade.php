<?php
    $arr = [ 1 => 'Enable', 0 => 'Disable'];
?>

{{--Show all error--}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <label>Hotel</label>
    <select class="form-control" name="room[hotel_id]">
        @isset($hotels)
        @foreach($hotels as $key => $hotel)
            <option value="{{ $hotel['id'] }}" 
                {{ isset($room['room_edit']->hotel_id) && $room['room_edit']->hotel_id == $key || old('room.hotel_id') ? 'selected' : "" }}>
                {{ $hotel['name'] }}
            </option>
        @endforeach 
        @endisset
    </select>
</div>

{{-- Room type --}}
<div class="form-group">
    <label>Room type</label>
    <select class="form-control" name="room[room_type_id]">
        @isset($room_types)
        @foreach($room_types as $key => $room_type)
            <option value="{{ $room_type['id'] }}" 
                {{ isset($room['room_edit']->room_type_id) && $room['room_edit']->room_type_id == $key || old('room.room_type_id')  ? 'selected' : "" }}>
                {{ $room_type['room_type_name'] }}
            </option>
        @endforeach 
        @endisset
    </select>
</div>

{{-- Bed type --}}
<div class="form-group">
    <label>Bed type</label>
    <select class="form-control" name="room[bed_type_id]">
        @isset($bed_types)
        @foreach($bed_types as $key => $bed_type)
            <option value="{{ $bed_type['id'] }}" 
                {{ isset($room['room_edit']->bed_type_id) && $room['room_edit']->bed_type_id == $key || old('room.bed_type_id') ? 'selected' : "" }}>
                {{ $bed_type['bed_type_name'] }}
            </option>
        @endforeach 
        @endisset
    </select>
</div>

{{-- max person --}}
<div class="form-group">
    <label for="max_person">Max person</label>
    <input 
        value="{{ $rooms->max_person or old('room.max_person') }}" 
        type="number" 
        class="form-control" 
        id="max_person"
        placeholder="Max Permison ..." 
        name="room[max_person]" 
    />
</div>

{{-- max extra bed --}}
<div class="form-group">
    <label for="max_extra_bed">Max extra bed</label>
    <input 
        value="{{ $rooms->max_extra_bed or old('room.max_extra_bed') }}" 
        type="number" 
        class="form-control" 
        id="max_extra_bed"
        placeholder="Max Extra Bed ..." 
        name="room[max_extra_bed]" 
    />
</div>

{{-- width --}}
<div class="form-group">
    <label for="width">Width</label>
    <input 
        value="{{ $rooms->width or old('room.width') }}" 
        type="number" 
        class="form-control" 
        id="width"
        placeholder="Width ..." 
        name="room[width]" 
    />
</div>

{{-- length --}}
<div class="form-group">
    <label for="length">Length</label>
    <input 
        value="{{ $rooms->length or old('room.length') }}" 
        type="number" 
        class="form-control" 
        id="length"
        placeholder="Length ..." 
        name="room[length]" 
    />
</div>

{{-- Price --}}
<div class="form-group">
    <label for="price">Price</label>
    <input 
        value="{{ $rooms->price or old('room.price') }}" 
        type="number" 
        class="form-control" 
        id="price"
        placeholder="Price ..." 
        name="room[price]" 
    />
</div>

{{-- price of extra bed --}}
<div class="form-group">
    <label for="price_extra_bed">Price of extra bed</label>
    <input
            value="{{ $rooms->price_of_extra_bed or old('room.price_of_extra_bed') }}"
            type="number"
            class="form-control"
            id="price_extra_bed"
            placeholder="Price Of Extra Bed ... "
            name="room[price_of_extra_bed]"
    />
</div>

{{-- Number Of rooms --}}
<div class="form-group">
    <label for="number_of_room">Number of rooms</label>
    <input
        value="{{ $rooms->number_of_rooms or old('room.number_of_rooms') }}"
        type="number"
        class="form-control" 
        id="number_of_room"
        placeholder="Number Of rooms ... "
        name="room[number_of_rooms]"
    />
</div>

{{-- Breackfast Included --}}
<div class="form-group">
    <label>Breackfast Included</label>
    <select class="form-control" name="room[breakfast_included]">
        @foreach($arr as $key => $arr)
            <option value="{{ $key }}" 
            {{ isset($rooms->breakfast_included) && $rooms->breakfast_included == $key ? 'selected' : "" }} >{{ $arr }}</option>
        @endforeach 
    </select>
</div>
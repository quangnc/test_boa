@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<choose-image value="{{ isset($rooms['image']) ? $rooms['image'] : old('room.image') }}"
              id="room-image"
              input-name="room[image]">
</choose-image>

<list-images :value="{{ $room['images'] or old('images') }}"
             id="room-images"
             input-name="images">
</list-images> 
<choose-image value="{{ isset($hotel_edit->image) ? $hotel_edit->image : old('hotel.image') }}"
              id="hotel-image"
              input-name="hotel[image]">
</choose-image>
{{-- <list-images :value="{{ (isset($images) ? $images : $hotel['images']) or old('hotel_images') }}" --}}
<list-images :value="{{  isset($images) ? $images : old('hotel_images') }}"
             id="hotel_images"
             input-name="hotel_images">
</list-images>
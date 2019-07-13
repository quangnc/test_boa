
<choose-image value="{{ isset($tours->image) ? $tours->image : old('tour.image') }}"
              id="tour-image"
              input-name="tour[image]">
</choose-image>

<list-images :value="{{ $images or old('images') }}"
             id="tour-images"
             input-name="images">
</list-images>
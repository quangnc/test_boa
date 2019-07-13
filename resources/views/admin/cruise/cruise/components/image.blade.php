
<choose-image value="{{ isset($cruises->image) ? $cruises->image : old('cruise.image') }}"
              id="cruise-image"
              input-name="cruise[image]">
</choose-image>

<list-images :value="{{ $images or old('images') }}"
             id="cruise-images"
             input-name="images">
</list-images>
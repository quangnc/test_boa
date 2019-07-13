<div class="form-group">
    <label for="lat">Lat Map</label>
    <input 
        type="text" 
        class="form-control" 
        id="lat" 
        placeholder="Lat Map ..."
        name="setting[lat]"
        value="{{ isset($setting['lat']) ? $setting['lat'] : '' }}"
    >
</div>

<div class="form-group">
    <label for="lng">Lng Map</label>
    <input 
        type="text" 
        class="form-control" 
        id="lng" 
        placeholder="Lng Map"
        name="setting[lng]"
        value="{{ isset($setting['lng']) ? $setting['lng'] : '' }}"
    >
</div>
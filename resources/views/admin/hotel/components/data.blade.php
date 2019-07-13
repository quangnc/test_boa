<?php
    $arr = ['Enable', 'Disable'];
?>  
<div class="card card-primary">
    <div class="card-body">
        <div class="form-group">
            <label for="txtSortOrder">Sort order</label>
            <input 
                value="{{ isset($hotel_edit->sort_order) ? $hotel_edit->sort_order : old('hotel.sort_order') }}" 
                type="number" 
                class="form-control" 
                id="txtSortOrder" 
                placeholder="Sort order" 
                name="hotel[sort_order]" >
        </div>

        <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="hotel[status]">
                @foreach($arr as $key => $arr)
                    <option value="{{ $key }}" {{ isset($hotel_edit->status) && $hotel_edit->status == $key || old('hotel.status') ? 'selected' : "" }}>{{ $arr }}</option>
                @endforeach 
            </select>
        </div>
    </div>
</div>
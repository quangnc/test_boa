<div class="form-group">
        <label for="Susses">Susses</label>
        <input 
            type="text" 
            class="form-control" 
            id="Susses" 
            placeholder="Message Susses ..."
            name="setting[susses]"
            value="{{ isset($setting['susses']) ? $setting['susses'] : '' }}"
        >
    </div>
    
    <div class="form-group">
        <label for="Error">Error</label>
        <input 
            type="text" 
            class="form-control" 
            id="Error" 
            placeholder="Message Error"
            name="setting[error]"
            value="{{ isset($setting['error']) ? $setting['error'] : '' }}"
        >
    </div>
<div class="form-group">
    <label for="admin_language">Admin Language</label>
    <select class="form-control" name="setting[admin_language]" id="admin_language">
        @foreach($languages as $key => $language)
            <option value="{{ $language->language_id }}"
                    {{ isset($setting['admin_language']) && $setting['admin_language'] == $language->language_id ? 'selected' : "" }}
            >
                {{ $language->name }}
            </option>
        @endforeach
    </select>
</div>
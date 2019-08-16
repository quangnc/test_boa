<div class="form-group">
    <label for="setting-image">Logo</label>
    <choose-image value="{{ isset($setting['logo']) ? $setting['logo'] : old('setting.logo') }}"
                  id="setting-image"
                  input-name="setting[logo]">
    </choose-image>
</div>
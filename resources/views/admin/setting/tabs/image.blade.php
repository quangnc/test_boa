<div class="form-group">
    <label for="setting-image">Logo</label>
    <choose-image value="{{ isset($setting['logo']) ? $setting['logo'] : old('setting.logo') }}"
                  id="setting-image"
                  input-name="setting[logo]">
    </choose-image>
</div>

<div class="form-group">
    <label for="setting-image-footer">Logo Footer</label>
    <choose-image value="{{ isset($setting['logo_footer']) ? $setting['logo_footer'] : old('setting.logo_footer') }}"
                  id="setting-image-footer"
                  input-name="setting[logo_footer]">
    </choose-image>
</div>
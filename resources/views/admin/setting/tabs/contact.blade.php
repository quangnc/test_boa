<div class="form-group">
    <label for="address">@lang('home.address') </label>
    <input type="text" class="form-control" id="address" placeholder="Address"
           name="setting[address]"
           value="{{ isset($setting['address']) ? $setting['address'] : '' }}"
    >
</div>

<div class="form-group">
    <label for="email">@lang('home.email')</label>
    <input type="text" class="form-control" id="email" placeholder="Email"
           name="setting[email]"
           value="{{ isset($setting['email']) ? $setting['email'] : '' }}"
    >
</div>

<div class="form-group">
    <label for="phone">@lang('home.phone')</label>
    <input type="text" class="form-control" id="phone" placeholder="Phone"
           name="setting[phone]"
           value="{{ isset($setting['phone']) ? $setting['phone'] : '' }}"
    >
</div>

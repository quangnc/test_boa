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

<div class="form-group">
    <label for="open_time">@lang('home.open_time')</label>
    <input type="text" class="form-control" id="open_time" placeholder="Open Time"
           name="setting[open_time]"
           value="{{ isset($setting['open_time']) ? $setting['open_time'] : '' }}"
    >
</div>

<div class="form-group">
    <label for="contact_note">@lang('home.contact_us')</label>
    <textarea
            class="form-control"
            name="setting[contact_note]"
            id="contact_note"
            rows="5">{{ isset($setting['contact_note']) ? $setting['contact_note'] : '' }}</textarea>
</div>
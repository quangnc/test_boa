<div class="form-group">
    <label for="facebook">Facebook</label>
    <input type="text" class="form-control" id="facebook" placeholder="Facebook page"
           name="setting[facebook]"
           value="{{ isset($setting['facebook']) ? $setting['facebook'] : '' }}"
    >
</div>

<div class="form-group">
    <label for="google">Google</label>
    <input type="text" class="form-control" id="google" placeholder="Google page"
           name="setting[google]"
           value="{{ isset($setting['google']) ? $setting['google'] : '' }}"
    >
</div>

<div class="form-group">
    <label for="google">Twitter</label>
    <input type="text" class="form-control" id="twitter" placeholder="Twitter page"
           name="setting[twitter]"
           value="{{ isset($setting['twitter']) ? $setting['twitter'] : '' }}"
    >
</div>
<div class="form-group">
    <label for="skype">Skype</label>
    <input type="text" class="form-control" id="skype" placeholder="Skype ID"
            name="setting[skype]"
            value="{{ isset($setting['skype']) ? $setting['skype'] : '' }}"
    >
</div>

<div class="form-group">
    <label for="copyright">Copyright</label>
    <input type="text" class="form-control" id="copyright" placeholder="Copyright"
           name="setting[copyright]"
           value="{{ isset($setting['copyright']) ? $setting['copyright'] : '' }}"
    >
</div>

<div class="form-group">
    <label for="sortLinks">Sort Link</label>
    <textarea
            class="form-control"
            name="setting[sort_link]"
            id="sortLinks"
            rows="5">{{ isset($setting['sort_link']) ? $setting['sort_link'] : '' }}</textarea>
</div>
<div class="form-group">
    <label for="sortLinks">Helper Link</label>
    <textarea name="setting[helper_links]" class="ckeditor" placeholder="Place add link here"
              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ isset($setting['helper_links']) ? $setting['helper_links'] : '' }}</textarea>
</div>

<div class="form-group">
    <label for="sortLinks">OUR AWARDS</label>
    <textarea class="form-control" name="setting[our_awards]" placeholder="Place add our awards"
              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ isset($setting['our_awards']) ? $setting['our_awards'] : '' }}</textarea>
</div>
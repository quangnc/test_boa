<div class="form-group">
    <label for="meta_title">Meta Title</label>
    <input type="text" class="form-control" id="meta_title" placeholder="Meta Title"
           name="setting[meta_title]"
           value="{{ isset($setting['meta_title']) ? $setting['meta_title'] : '' }}"
    >
</div>

<div class="form-group">
    <label for="meta_description">Meta Description</label>
    <textarea
            class="form-control"
            name="setting[meta_description]"
            id="meta_description"
            rows="5">{{ isset($setting['meta_description']) ? $setting['meta_description'] : '' }}</textarea>
</div>

<div class="form-group">
    <label for="meta_keyword">Meta Keyword</label>
    <textarea
            class="form-control"
            name="setting[meta_keyword]"
            id="meta_keyword"
            rows="5">{{ isset($setting['meta_keyword']) ? $setting['meta_keyword'] : '' }}</textarea>
</div>

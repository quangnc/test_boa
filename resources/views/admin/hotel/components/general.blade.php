<div class="tabs-general">
    <ul class="nav nav-tabs languages">
        @isset($languages)
        @foreach ($languages as $language)
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#{{ $language->name }}">{{ $language->name }}</a>
            </li>
        @endforeach
        @endisset
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        @isset($languages)
        @foreach ($languages as $language)
            <input 
                type="hidden" 
                name="hotel_descriptions[{{ $language->language_id }}][language_id]" 
                value="{{ $language->language_id }}"
            >
            <div class="tab-pane" id="{{ $language->name }}">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name"
                                   name="hotel_descriptions[{{ $language->language_id }}][name]"
                                   value="{{ isset($hotel_descriptions[$language->language_id]['name']) ? $hotel_descriptions[$language->language_id]['name'] : old("hotel_descriptions.".$language->language_id.".name") }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="ckeditor" name="hotel_descriptions[{{ $language->language_id }}][description]"
                                      rows="3" placeholder="Description ..."><?php echo isset($hotel_descriptions[$language->language_id]['description']) ? $hotel_descriptions[$language->language_id]['description'] : old("hotel_descriptions.".$language->language_id.".description") ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" class="form-control" id="meta_title" placeholder="Meta Title"
                                   name="hotel_descriptions[{{ $language->language_id }}][meta_title]"
                                   value="<?php echo isset($hotel_descriptions[$language->language_id]['meta_title']) ? $hotel_descriptions[$language->language_id]['meta_title'] : old("hotel_descriptions.".$language->language_id.".meta_title") ?>"
                            >
                        </div>
                        <div class="form-group">
                            <label for="meta_description"> Meta Description</label>
                            <textarea class="form-control" name="hotel_descriptions[{{ $language->language_id }}][meta_description]"
                                      rows="3" placeholder="Meta Description ..."><?php echo isset($hotel_descriptions[$language->language_id]['meta_description']) ? $hotel_descriptions[$language->language_id]['meta_description'] : old("hotel_descriptions.".$language->language_id.".meta_description") ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="txtMetaKeyWord">Meta Keyword</label>
                            <textarea class="form-control" name="hotel_descriptions[{{ $language->language_id }}][meta_keyword]"
                                      rows="3" placeholder="Meta Kewword ..."><?php echo isset($hotel_descriptions[$language->language_id]['meta_keyword']) ? $hotel_descriptions[$language->language_id]['meta_keyword'] : old("hotel_descriptions.".$language->language_id.".meta_keyword") ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @endisset
    </div>
</div>
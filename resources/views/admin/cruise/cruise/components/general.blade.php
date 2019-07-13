
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
                    name="cruise_descriptions[{{ $language->language_id }}][language_id]" 
                    value="{{ $language->language_id }}"
                >
                <div class="tab-pane" id="{{ $language->name }}">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="hidden" name="cruise_descriptions[{{ $language->language_id }}][language_id]" value="{{ $language->language_id }}">
                                <input type="text" class="form-control" id="name" 
                                        placeholder="Name ..."
                                        name="cruise_descriptions[{{ $language->language_id }}][name]"
                                        value="{{ isset($cruise_descriptions[$language->language_id]['name']) ? $cruise_descriptions[$language->language_id]['name'] : old("cruise_descriptions.".$language->language_id.".name") }}"
                                >
                            </div>
                            <div class="form-group">
                                <label for="overview">Cruise Overview</label>
                                <textarea class="form-control ckeditor"
                                    id="overview"
                                    name="cruise_descriptions[{{ $language->language_id }}][overview]"
                                    rows="3" placeholder="Overview ..."><?php echo isset($cruise_descriptions[$language->language_id]['overview']) ? $cruise_descriptions[$language->language_id]['overview'] : old("cruise_descriptions.".$language->language_id.".overview") ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="itinerary">Cruise Itinerary 2 Day</label>
                                <textarea class="form-control ckeditor" 
                                    id="itinerary"
                                    name="cruise_descriptions[{{ $language->language_id }}][itinerary_2_day]"
                                    rows="3" placeholder="Itinerary 2 Day ..."><?php echo isset($cruise_descriptions[$language->language_id]['itinerary_2_day']) ? $cruise_descriptions[$language->language_id]['itinerary_2_day'] : old("cruise_descriptions.".$language->language_id.".itinerary_2_day") ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="itinerary">Cruise Itinerary 3 Day</label>
                                <textarea class="form-control ckeditor" 
                                    id="itinerary"
                                    name="cruise_descriptions[{{ $language->language_id }}][itinerary_3_day]"
                                    rows="3" placeholder="Itinerary 3 Day ..."><?php echo isset($cruise_descriptions[$language->language_id]['itinerary_3_day']) ? $cruise_descriptions[$language->language_id]['itinerary_3_day'] : old("cruise_descriptions.".$language->language_id.".itinerary_3_day") ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @endisset
        </div>
    </div>

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
                    name="tour_descriptions[{{ $language->language_id }}][language_id]" 
                    value="{{ $language->language_id }}"
                >
                <div class="tab-pane" id="{{ $language->name }}">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="hidden" name="tour_descriptions[{{ $language->language_id }}][language_id]" value="{{ $language->language_id }}">
                                <input type="text" class="form-control" id="name" 
                                        placeholder="Name ..."
                                        name="tour_descriptions[{{ $language->language_id }}][name]"
                                        value="{{ isset($tour_descriptions[$language->language_id]['name']) ? $tour_descriptions[$language->language_id]['name'] : old("tour_descriptions.".$language->language_id.".name") }}"
                                >
                            </div>
                            <div class="form-group">
                                <label for="overview">Tour Overview</label>
                                <textarea class="form-control ckeditor" 
                                    id="overview"
                                    name="tour_descriptions[{{ $language->language_id }}][overview]"
                                    rows="3" placeholder="Overview ..."><?php echo isset($tour_descriptions[$language->language_id]['overview']) ? $tour_descriptions[$language->language_id]['overview'] : old("tour_descriptions.".$language->language_id.".overview") ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="itinerary">Tour Itinerary</label>
                                <textarea class="form-control ckeditor" 
                                    id="itinerary"
                                    name="tour_descriptions[{{ $language->language_id }}][itinerary]"
                                    rows="3" placeholder="Itinerary ..."><?php echo isset($tour_descriptions[$language->language_id]['itinerary']) ? $tour_descriptions[$language->language_id]['itinerary'] : old("tour_descriptions.".$language->language_id.".itinerary") ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="price_inclusion">Tour Price Inclusion</label>
                                <textarea class="form-control ckeditor" 
                                    id="price_inclusion"
                                    name="tour_descriptions[{{ $language->language_id }}][price_inclusion]"
                                    rows="3" placeholder="Price Inclusion ..."><?php echo isset($tour_descriptions[$language->language_id]['price_inclusion']) ? $tour_descriptions[$language->language_id]['price_inclusion'] : old("tour_descriptions.".$language->language_id.".price_inclusion") ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="highlight">Tour Highlight</label>
                                <textarea class="form-control" 
                                    id="highlight"
                                    name="tour_descriptions[{{ $language->language_id }}][highlight]"
                                    rows="3" placeholder="Highlight ..."><?php echo isset($tour_descriptions[$language->language_id]['highlight']) ? $tour_descriptions[$language->language_id]['highlight'] : old("tour_descriptions.".$language->language_id.".highlight") ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @endisset
        </div>
    </div>
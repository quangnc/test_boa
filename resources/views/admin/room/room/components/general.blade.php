@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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
                    name="room_descriptions[{{ $language->language_id }}][language_id]" 
                    value="{{ $language->language_id }}"
                >
                <div class="tab-pane" id="{{ $language->name }}">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="hidden" name="room_descriptions[{{ $language->language_id }}][language_id]" value="{{ $language->language_id }}">
                                <input type="text" class="form-control" id="name" 
                                        placeholder="Name"
                                       name="room_descriptions[{{ $language->language_id }}][name]"
                                       value="{{ isset($room_descriptions[$language->language_id]['name']) ? $room_descriptions[$language->language_id]['name'] : old("room_descriptions.".$language->language_id.".name") }}"
                                >
                            </div>
                            <div class="form-group">
                                <label for="description">Room Description</label>
                                <textarea class="form-control" 
                                    name="room_descriptions[{{ $language->language_id }}][description]"
                                    rows="3" placeholder="Description ..."><?php echo isset($room_descriptions[$language->language_id]['description']) ? $room_descriptions[$language->language_id]['description'] : old("room_descriptions.".$language->language_id.".description") ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @endisset
        </div>
    </div>
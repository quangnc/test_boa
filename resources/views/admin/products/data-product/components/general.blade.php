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
                name="blog_post_descriptions[{{ $language->language_id }}][language_id]" 
                value="{{ $language->language_id ? $language->language_id : "" }}"
            >
            <div class="tab-pane" id="{{ $language->name }}">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name"
                                   name="blog_post_descriptions[{{ $language->language_id }}][name]"
                                   value="{{ isset($blog_post_descriptions[$language->language_id]['name']) ? $blog_post_descriptions[$language->language_id]['name'] : old("blog_post_descriptions.".$language->language_id.".name") }}"
                            >
                            @if($errors->has(`blog_post_descriptions.$language->language_id.name`) && !old("blog_post_descriptions.".$language->language_id.".name"))
                                <p style="color:red">{{$errors->first(`blog_post_descriptions[$language->language_id][name]`) }}</p>
						    @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="vacis">Vacis</label>
                            <input type="text" class="form-control" id="vacis" placeholder="vacis"
                                   name="blog_post_descriptions[{{ $language->language_id }}][vacis]"
                                   value="<?php echo isset($blog_post_descriptions[$language->language_id]['vacis']) ? $blog_post_descriptions[$language->language_id]['vacis'] : old("blog_post_descriptions.".$language->language_id.".vacis") ?>"
                            >
                            @if($errors->has(`blog_post_descriptions.$language->language_id.vacis`) && !old("blog_post_descriptions.".$language->language_id.".vacis"))
							    <p style="color:red">{{$errors->first(`blog_post_descriptions[ $language->language_id][vacis]`)}}</p>
						    @endif
                        </div>
                        <div class="form-group">
                            <label for="field">Field</label>
                            <textarea class="form-control" name="blog_post_descriptions[{{ $language->language_id }}][field]"
                                      rows="3" placeholder="Field ..."><?php echo isset($blog_post_descriptions[$language->language_id]['field']) ? $blog_post_descriptions[$language->language_id]['field'] : old("blog_post_descriptions.".$language->language_id.".field") ?></textarea>
                            @if($errors->has(`blog_post_descriptions.$language->language_id.field`) && !old("blog_post_descriptions.".$language->language_id.".field"))
							    <p style="color:red">{{$errors->first(`blog_post_descriptions[$language->language_id][field]`)}}</p>
						    @endif
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <textarea class="form-control" name="blog_post_descriptions[{{ $language->language_id }}][city]"
                                      rows="3" placeholder="City ..."><?php echo isset($blog_post_descriptions[$language->language_id]['city']) ? $blog_post_descriptions[$language->language_id]['city'] : old("blog_post_descriptions.".$language->language_id.".city") ?></textarea>
                            @if($errors->has(`blog_post_descriptions.$language->language_id.city`) && !old("blog_post_descriptions.".$language->language_id.".city"))
							    <p style="color:red">{{$errors->first(`blog_post_descriptions[$language->language_id][city]`)}}</p>
						    @endif
                        </div>
                        <div class="form-group">
                            <label for="place">Place</label>
                            <textarea class="form-control" name="blog_post_descriptions[{{ $language->language_id }}][place]"
                                      rows="3" placeholder="Place ..."><?php echo isset($blog_post_descriptions[$language->language_id]['place']) ? $blog_post_descriptions[$language->language_id]['place'] : old("blog_post_descriptions.".$language->language_id.".place") ?></textarea>
                            @if($errors->has(`blog_post_descriptions.$language->language_id.place`) && !old("blog_post_descriptions.".$language->language_id.".place"))
							    <p style="color:red">{{$errors->first(`blog_post_descriptions[$language->language_id][place]`)}}</p>
						    @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @endisset
    </div>
</div>
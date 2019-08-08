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
                            <label for="description">Description</label>
                            <textarea 
                                class="form-control" 
                                name="blog_post_descriptions[{{ $language->language_id }}][description]"
                                rows="3" 
                                placeholder="Description ..."
                            ><?php echo isset($blog_post_descriptions[$language->language_id]['description']) ? $blog_post_descriptions[$language->language_id]['description'] : old("blog_post_descriptions.".$language->language_id.".description") ?></textarea>
                            @if($errors->has(`blog_post_descriptions.$language->language_id.description`) && !old("blog_post_descriptions.".$language->language_id.".description"))
							    <p style="color:red">{{$errors->first(`blog_post_descriptions[$language->language_id][description]`)}}</p>
						    @endif
                        </div>

                        <div class="form-group">
                            <label for="description">Content</label>
                            <textarea 
                                class="form-control ckeditor"
                                name="blog_post_descriptions[{{ $language->language_id }}][content]"
                                rows="3" 
                                placeholder="Content ..."
                            ><?php echo isset($blog_post_descriptions[$language->language_id]['content']) ? $blog_post_descriptions[$language->language_id]['content'] : old("blog_post_descriptions.".$language->language_id.".content") ?></textarea>
                            @if($errors->has(`blog_post_descriptions.$language->language_id.content`) && !old("blog_post_descriptions.".$language->language_id.".content"))
							    <p style="color:red">{{$errors->first(`blog_post_descriptions[$language->language_id][description]`)}}</p>
						    @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" class="form-control" id="meta_title" placeholder="Meta Title"
                                   name="blog_post_descriptions[{{ $language->language_id }}][meta_title]"
                                   value="<?php echo isset($blog_post_descriptions[$language->language_id]['meta_title']) ? $blog_post_descriptions[$language->language_id]['meta_title'] : old("blog_post_descriptions.".$language->language_id.".meta_title") ?>"
                            >
                            @if($errors->has(`blog_post_descriptions.$language->language_id.meta_title`) && !old("blog_post_descriptions.".$language->language_id.".meta_title"))
							    <p style="color:red">{{$errors->first(`blog_post_descriptions[ $language->language_id][meta_title]`)}}</p>
						    @endif
                        </div>
                        <div class="form-group">
                            <label for="meta_description"> Meta Description</label>
                            <textarea class="form-control" name="blog_post_descriptions[{{ $language->language_id }}][meta_description]"
                                      rows="3" placeholder="Meta Description ..."><?php echo isset($blog_post_descriptions[$language->language_id]['meta_description']) ? $blog_post_descriptions[$language->language_id]['meta_description'] : old("blog_post_descriptions.".$language->language_id.".meta_description") ?></textarea>
                            @if($errors->has(`blog_post_descriptions.$language->language_id.meta_description`) && !old("blog_post_descriptions.".$language->language_id.".meta_description"))
							    <p style="color:red">{{$errors->first(`blog_post_descriptions[$language->language_id][meta_description]`)}}</p>
						    @endif
                        </div>
                        <div class="form-group">
                            <label for="txtMetaKeyWork">Meta Keyword</label>
                            <textarea class="form-control" name="blog_post_descriptions[{{ $language->language_id }}][meta_keyword]"
                                      rows="3" placeholder="Meta Keyword ..."><?php echo isset($blog_post_descriptions[$language->language_id]['meta_keyword']) ? $blog_post_descriptions[$language->language_id]['meta_keyword'] : old("blog_post_descriptions.".$language->language_id.".meta_keyword") ?></textarea>
                            @if($errors->has(`blog_post_descriptions.$language->language_id.meta_keyword`) && !old("blog_post_descriptions.".$language->language_id.".meta_keyword"))
							    <p style="color:red">{{$errors->first(`blog_post_descriptions[$language->language_id][meta_keyword]`)}}</p>
						    @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @endisset
    </div>
</div>
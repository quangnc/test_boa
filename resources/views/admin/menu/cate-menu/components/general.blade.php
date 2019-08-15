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
                    </div>
                </div>
            </div>
        @endforeach
        @endisset
    </div>
</div>
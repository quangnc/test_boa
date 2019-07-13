<div class="gdlr-page-title-wrapper" style="background-image: url({{ Storage::url($data->image) }})">
    <div class="gdlr-page-title-overlay"></div>
    <div class="gdlr-page-title-container container">
        <h1 class="gdlr-page-title">{{ $data->title }}</h1>
        @if(isset($data->description))
            <span class="gdlr-page-caption">{{ $data->description }}</span>
        @endif
    </div>
</div>
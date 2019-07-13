<div class="gdlr-item-title-wrapper gdlr-item pos-left pos-left-divider ">
    <div class="gdlr-item-title-head">
        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">@lang('home.gallery')</h3>
        <div class="clear"></div>
    </div>
    <div class="gdlr-item-title-divider"></div>
</div>
<div class="gdlr-gallery-item gdlr-item">
    @isset($images)
    <?php $i = 1; ?>
    @foreach($images as $image)
        <div class="gallery-column columns {{ $i == 1 ? 'six' : 'three' }}">
            <div class="gallery-item">
                <a href="{{ asset('public/upload').'/'.$image['image'] }}" data-fancybox-group="gdlr-gal-1" data-rel="fancybox">
                    <img src="{{ $image['thumb'] }}" alt=" {{ $image['title']  }} " width="400" height="400">
                </a>
            </div>
        </div>
        <?php $i++; ?>
    @endforeach
    @endisset
    <div class="clear"></div>
</div>
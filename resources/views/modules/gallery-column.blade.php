<div class="with-sidebar-wrapper">
    <section id="content-section-1">
        <div class="section-container container">
            <div class="gdlr-gallery-item gdlr-item" style="margin-bottom: 40px;">
            @isset($images)
            <?php $i = 1; ?>
            @foreach($images as $image)
                <div class="gallery-column four columns">
                    <div class="gallery-item">
                        <a href="{{ asset('public/upload').'/'.$image['image'] }}" data-fancybox-group="gdlr-gal-1" data-rel="fancybox">
                            <img src="{{ $image['thumb'] }}" alt="{{ $image['title']  }}" width="400" height="300">
                        </a>
                    </div>
                </div>
                <?php $i++; ?>
                @if( $i/3 === 0 ) 
                    <div class="clear"></div>
                @endif
            @endforeach
            @endisset
            </div>
            <div class="clear"></div>
        </div>
    </section>
</div>
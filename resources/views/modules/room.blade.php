<section id="content-section-3">
    <div class="gdlr-color-wrapper  gdlr-show-all no-skin" style="background-color: #0a0a0a; padding-top: 60px; ">
        <div class="container">
                @isset($data['room'])
                @foreach( $data['room'] as $room )
                    <div class="four columns">
                        <div class="gdlr-ux column-service-ux">
                            <div class="gdlr-item gdlr-column-service-item gdlr-type-2">
                                <div class="column-service-image">
                                    <a href="{{ route('hotel') }} ">
                                    <img src="{{ $room['image_room'] }}" alt="" width="500" height="257">
                                    </a>
                                </div>
                                <div class="column-service-content-wrapper">
                                    <h3 class="column-service-title">{{ $room['room_desc']->name }}</h3>
                                    <div class="column-service-divider"></div>
                                    <div class="column-service-content gdlr-skin-content">
                                        <p>{{ Helper::text_limit($room['room_desc']->description), 25 }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endisset
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</section>
{{-- end room hotel --}}
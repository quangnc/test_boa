{{-- begin slide room hotel --}}
<section id="content-section-4">
        <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-light-grey" id="gdlr-parallax-wrapper-1" data-bgspeed="0.1" style="background-image: url('upload/room-bg.jpg'); padding-top: 80px; padding-bottom: 10px; ">
            <div class="container">
                <div class="gdlr-item-title-wrapper gdlr-item pos-center gdlr-nav-container ">
                    <div class="gdlr-item-title-head">
                        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">{{ $data['title_carousel'] ? $data['title_carousel'] : "" }}</h3>
                        <div class="gdlr-item-title-carousel"><i class="icon-angle-left gdlr-flex-prev"></i><i class="icon-angle-right gdlr-flex-next"></i></div>
                        <div class="clear"></div>
                    </div>
                    <a class="gdlr-item-title-link" href="{{ route('hotel') }}">View All Rooms<i class="fa fa-long-arrow-right icon-long-arrow-right"></i></a></div>
                <div class="room-item-wrapper type-modern">
                    <div class="room-item-holder ">
                        <div class="gdlr-room-carousel-item gdlr-item">
                            <div class="flexslider" data-type="carousel" data-nav-container="room-item-wrapper" data-columns="3">
                                <ul class="slides">
                                    {{-- @include('frontpage.page-home.show-list-rooms') --}}
                                    @isset($data['carousel_room'])
                                    @foreach( $data['carousel_room'] as $carousel_room )
                                        <li class="gdlr-item gdlr-modern-room">
                                            <div class="gdlr-room-thumbnail">
                                                <a href="{{ route('hotel') }} ">
                                                    <img src="{{ $carousel_room['image_room'] }}" alt="{{ $carousel_room['image_room'] }}" width="500" height="257">
                                                </a>
                                            </div>
                                            <h3 class="gdlr-room-title">
                                                <a href="{{ route('hotel') }}"> {{ $carousel_room['room_desc']->name }} </a>
                                            </h3>
                                            <a href="{{ route('hotel') }}" class="gdlr-room-detail">
                                                Check Details<i class="fa fa-long-arrow-right icon-long-arrow-right"></i>
                                            </a>
                                        </li>
                                    @endforeach
                                    @endisset
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </section>
    {{-- end slide room hotel --}}
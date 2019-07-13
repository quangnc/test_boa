@push('scripts')
<script type='text/javascript' src='{{ asset('frontpage/plugins\google-map-plugin\assets\js\maps.js') }}'></script>

    <script>
        var map;
        function initMap() {
            var lat = {{ $setting['lat'] }};
            var lng = {{ $setting['lng'] }};
            map = new google.maps.Map(document.getElementById('map1'), {
                center: {
                    lat: lat,
                    lng: lng
                },
                zoom: 16
            });
            var marker = new google.maps.Marker({
                position: {
                    lat: lat,
                    lng: lng
                },
                map: map
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8w2FynJ5BScWwNgz2vbRdFETpxSO5uvI&callback=initMap"
            async defer></script>
@endpush

@extends('layouts.app')

@section('content')

    <div id="gdlr-header-substitute">
    </div>

    {{--Content Top--}}
    @include('layouts.content_top')

    <div class="content-wrapper">
        <div class="gdlr-content">

            <!-- Above Sidebar Section-->

            <!-- Sidebar With Content Section-->
            <div class="with-sidebar-wrapper">
                <div class="with-sidebar-container container">
                    <div class="with-sidebar-left twelve columns">
                        <div class="with-sidebar-content eight columns">
                            <section id="content-section-1">
                                <div class="section-container container">
                                    <div class="gdlr-item gdlr-content-item" style="margin-bottom: 60px;">
                                        <p>
                                        <div class="clear"></div>
                                        <div class="gdlr-space" style="margin-top: -22px;"></div>
                                        <h5 class="gdlr-heading-shortcode " style="font-weight: bold;">
                                            @lang('home.please_fulfil_the')
                                        </h5>
                                        <div class="clear"></div>
                                        <div class="gdlr-space" style="margin-top: 25px;"></div>
                                        <div role="form" class="wpcf7 form-info" id="wpcf7-f4-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form class="quform" action="{{ route('add-contact') }}" method="post">
                                                {{ csrf_field() }}

                                                @if (isset($success))
                                                    <div class="alert alert-success">{{ $success }} </div>
                                                @endif
                                                <div class="quform-elements">
                                                    <div class="quform-element">
                                                        <p>@lang('home.your_name')
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-name">
                                                                <input id="name" type="text" name="name" size="40"
                                                                       class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                       aria-required="true" aria-invalid="false"
                                                                       value="{{ old('name') }}"
                                                                >
                                                        @if($errors->has('name') && !old("name"))
                                                            <p style="color:red">{{$errors->first('name')}}</p>
                                                            @endif
                                                            </span>
                                                            </p>
                                                    </div>
                                                    <div class="quform-element">
                                                        <p>@lang('home.your_email')
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-email">
                                                                <input id="email" type="text" name="email" size="40"
                                                                       class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                       aria-required="true" aria-invalid="false"
                                                                       value="{{ old('email') }}"
                                                                >
                                                            @if($errors->has('email') && !old("email"))
                                                                <p style="color:red">{{$errors->first('email')}}</p>
                                                            @endif
                                                            </span>
                                                            </p>
                                                    </div>
                                                    <div class="quform-element">
                                                        <p>Your Message
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-message">
                                                                <textarea id="message" name="message" cols="40"
                                                                          rows="10"
                                                                          class="wpcf7-form-control wpcf7-textarea"
                                                                          aria-invalid="false">{{ old('message') }}</textarea>
                                                        @if($errors->has('message') && !old("message"))
                                                            <p style="color:red">{{$errors->first('message')}}</p>
                                                            @endif
                                                            </span>
                                                            </p>
                                                    </div>
                                                    <p>
                                                        <!-- Begin Submit button -->
                                                    <div class="quform-submit">
                                                        <div class="quform-submit-inner">
                                                            <button type="submit" class="submit-button">
                                                                <span><em>@lang('home.send')</em></span></button>
                                                        </div>
                                                        <div class="quform-loading-wrap"><span
                                                                    class="quform-loading"></span></div>
                                                    </div>
                                                    </p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </section>
                        </div>

                        <div class="gdlr-sidebar gdlr-left-sidebar four columns">
                            <div class="gdlr-item-start-content sidebar-left-item">
                                <div id="text-6" class="widget widget_text gdlr-item gdlr-widget">
                                    <h3 class="gdlr-widget-title">@lang('home.contact_us')</h3>
                                    <div class="clear"></div>
                                    <div class="textwidget">{{ $setting['contact_note'] }}</div>
                                </div>
                                <div id="text-7" class="widget widget_text gdlr-item gdlr-widget">
                                    <h3 class="gdlr-widget-title">@lang('home.contact_information')</h3>
                                    <div class="clear"></div>
                                    <div class="textwidget">
                                        <p><i class="gdlr-icon fa fa-map-marker"
                                              style="color: #444444; font-size: 16px; "></i>{{ $setting['address'] }}
                                        </p>
                                        <p><i class="gdlr-icon fa fa-phone"
                                              style="color: #444444; font-size: 16px; "></i> {{ $setting['phone'] }}</p>
                                        <p><i class="gdlr-icon fa fa-envelope"
                                              style="color: #444444; font-size: 16px; "></i>{{ $setting['email'] }}</p>
                                        <p><i class="gdlr-icon fa fa-clock-o"
                                              style="color: #444444; font-size: 16px; "></i> {{ $setting['open_time'] }}
                                        </p>
                                    </div>
                                </div>
                                <div id="text-8" class="widget widget_text gdlr-item gdlr-widget">
                                    <h3 class="gdlr-widget-title">Social Media</h3>
                                    <div class="clear"></div>
                                    <div class="textwidget">
                                        <a href="{{ $setting['facebook'] }}">
                                            <i class="gdlr-icon fa fa-facebook"
                                               style="color: #444444; font-size: 28px; "></i>
                                        </a>
                                        <a href="{{ $setting['twitter'] }}">
                                            <i class="gdlr-icon fa fa-twitter"
                                               style="color: #444444; font-size: 28px; "></i>
                                        </a>
                                        <a href="{{ $setting['google'] }}">
                                            <i class="gdlr-icon fa fa-google"
                                               style="color: #444444; font-size: 28px; "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="clear"></div>
                </div>
            </div>

            <!-- Below Sidebar Section-->
            <div class="below-sidebar-wrapper">
                <section id="content-section-2">
                    <div class="gdlr-full-size-wrapper gdlr-show-all"
                         style="padding-bottom: 0px;  background-color: #ffffff; ">
                        <div class="gdlr-item gdlr-content-item" style="margin-bottom: 0px;">
                            <div class="wpgmp_map_container wpgmp-map-1" rel="map1">
                                <div class="wpgmp_map " style="width:100%; height:450px;" id="map1"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </section>
            </div>

        </div>
        <!-- gdlr-content -->
        <div class="clear"></div>
    </div>
@endsection
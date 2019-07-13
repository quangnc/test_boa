<section id="content-section-1">
    <div class="gdlr-full-size-wrapper gdlr-show-all" style="padding-bottom: 0px;  background-color: #ffffff; ">
        <div class="gdlr-master-slider-item gdlr-slider-item gdlr-item" style="margin-bottom: 0px;">
            <!-- MasterSlider -->
            <div id="P_MS5af5c0e887f3f" class="master-slider-parent ms-parent-id-2">


                <!-- MasterSlider Main -->
                <div id="MS5af5c0e887f3f" class="master-slider ms-skin-default">
                    @if (array_key_exists(0,$data))
                        <div class="ms-slide" data-delay="7" data-fill-mode="fill">
                            <img src="frontpage\plugins\masterslider\public\assets\css\blank.gif" alt="" title=""
                                 data-src="{{ Storage::url($data[0]->image) }}">

                            <div class="ms-layer  msp-cn-1-1" style="" data-duration="862" data-ease="easeOutQuint"
                                 data-offset-x="0" data-offset-y="-117" data-origin="mc" data-position="normal">
                                {{ $data[0]->title }}
                            </div>

                            <div class="ms-layer  msp-cn-1-3" style="width:48px;height:2px;" data-duration="775"
                                 data-delay="525" data-ease="easeOutQuint" data-offset-x="0" data-offset-y="-61"
                                 data-origin="mc" data-position="normal">
                            </div>

                            <div class="ms-layer  msp-cn-1-2" style=""
                                 data-effect="t(true,n,n,-500,n,n,n,n,n,n,n,n,n,n,n)" data-duration="712"
                                 data-delay="975" data-ease="easeOutQuint" data-offset-x="0" data-offset-y="7"
                                 data-origin="mc" data-position="normal">
                                {{ $data[0]->title1 }}
                            </div>

                            <div class="ms-layer  msp-cn-1-4" style=""
                                 data-effect="t(true,n,n,500,n,n,n,n,n,n,n,n,n,n,n)" data-duration="750"
                                 data-delay="1462" data-ease="easeOutQuint" data-offset-x="0" data-offset-y="90"
                                 data-origin="mc" data-position="normal">
                                {{ $data[0]->title2 }}
                            </div>


                        </div>
                    @endif

                    @if (array_key_exists(1,$data))
                        <div class="ms-slide" data-delay="3" data-fill-mode="fill">
                            <img src="frontpage\plugins\masterslider\public\assets\css\blank.gif" alt="" title=""
                                 data-src="{{ Storage::url($data[1]->image) }}">

                            <div class="ms-layer  msp-cn-1-5" style="" data-effect="t(true,n,n,n,n,n,n,n,n,n,n,n,n,n,n)"
                                 data-duration="850" data-ease="easeOutQuint" data-offset-x="375" data-offset-y="14"
                                 data-origin="ml" data-position="normal">
                                {{ $data[1]->title }}
                            </div>

                            <div class="ms-layer  msp-cn-1-6" style="" data-duration="937" data-delay="525"
                                 data-ease="easeOutQuint" data-offset-x="33" data-offset-y="102" data-origin="ml"
                                 data-position="normal">
                                {{ $data[1]->title1 }}
                            </div>

                            <div class="ms-layer  msp-cn-1-7" style="" data-duration="975" data-delay="1137"
                                 data-ease="easeOutQuint" data-offset-x="176" data-offset-y="176" data-origin="ml"
                                 data-position="normal">
                                {{ $data[1]->title2 }}
                            </div>


                        </div>
                    @endif
                    @if (array_key_exists(2,$data))
                        <div class="ms-slide" data-delay="3" data-fill-mode="fill">
                            <img src="frontpage\plugins\masterslider\public\assets\css\blank.gif" alt="" title=""
                                 data-src="{{ Storage::url($data[2]->image) }}">

                            <div class="ms-layer  msp-cn-1-8" style=""
                                 data-effect="t(true,n,150,n,n,n,n,n,n,n,n,n,n,n,n)"
                                 data-duration="1212" data-ease="easeOutQuint" data-offset-x="28" data-offset-y="157"
                                 data-origin="bl" data-position="normal">
                                {{ $data[2]->title }}
                            </div>

                            <div class="ms-layer  msp-cn-1-9" style="width:509px;" data-delay="937"
                                 data-ease="easeOutQuint"
                                 data-offset-x="30" data-offset-y="88" data-origin="bl" data-position="normal">
                                {{ $data[2]->title1 }}
                            </div>


                        </div>
                    @endif

                </div>
                <!-- END MasterSlider Main -->


            </div>
            <!-- END MasterSlider -->


        </div>
        <div class="clear"></div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</section>

@push('scripts')
    <script>
        (window.MSReady = window.MSReady || []).push(function($) {

            "use strict";
            var masterslider_7f3f = new MasterSlider();

            // slider controls
            masterslider_7f3f.control('arrows', {
                autohide: true,
                overVideo: true
            });
            masterslider_7f3f.control('bullets', {
                autohide: false,
                overVideo: true,
                dir: 'h',
                align: 'bottom',
                space: 8,
                margin: 25
            });
            // slider setup
            masterslider_7f3f.setup("MS5af5c0e887f3f", {
                width: 1140,
                height: 530,
                minHeight: 0,
                space: 0,
                start: 1,
                grabCursor: true,
                swipe: false,
                mouse: true,
                keyboard: false,
                layout: "fullwidth",
                wheel: false,
                autoplay: true,
                instantStartLayers: false,
                mobileBGVideo: false,
                loop: true,
                shuffle: false,
                preload: 0,
                heightLimit: true,
                autoHeight: false,
                smoothHeight: true,
                endPause: false,
                overPause: true,
                fillMode: "fill",
                centerControls: true,
                startOnAppear: false,
                layersMode: "center",
                autofillTarget: "",
                hideLayers: false,
                fullscreenMargin: 0,
                speed: 20,
                dir: "h",
                parallaxMode: 'swipe',
                view: "fadeFlow"
            });

            MSScrollParallax.setup(masterslider_7f3f, 30, 50, true);
            $("head").append("<link rel='stylesheet' id='ms-fonts'  href='//fonts.googleapis.com/css?family=Open+Sans:300,700|Merriweather:regular' type='text/css' media='all' />");

            window.masterslider_instances = window.masterslider_instances || [];
            window.masterslider_instances.push(masterslider_7f3f);
        });
    </script>
@endpush
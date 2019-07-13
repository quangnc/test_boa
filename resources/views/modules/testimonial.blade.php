
<section id="content-section-7">
    <div class="gdlr-color-wrapper  gdlr-show-all gdlr-skin-dark-testimonial" style="background-color: #1e1e1e; padding-top: 80px; padding-bottom: 45px; ">
        <div class="container">
            <div class="gdlr-testimonial-item-wrapper">
                <div class="gdlr-item-title-wrapper gdlr-item pos-center gdlr-nav-container ">
                    <div class="gdlr-item-title-head">
                        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">
                            @lang('home.testimonial')
                        </h3>
                        <div class="gdlr-item-title-carousel"><i class="icon-angle-left gdlr-flex-prev"></i><i class="icon-angle-right gdlr-flex-next"></i></div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="gdlr-item gdlr-testimonial-item carousel large plain-style">
                    <div class="gdlr-ux gdlr-testimonial-ux">
                        <div class="flexslider" data-type="carousel" data-nav-container="gdlr-testimonial-item" data-columns="1">
                            <ul class="slides">
                                <?php json_encode($data); ?> 
                                @foreach ($data['testimonials'] as $testimonial)
                                <li class="testimonial-item">
                                    <div class="testimonial-content gdlr-skin-content">
                                        <p>{{ $testimonial['review'] }}</p>
                                    </div>
                                    <div class="testimonial-info">
                                        <span class="testimonial-author gdlr-skin-link-color">{{ $testimonial['client'] }}</span>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</section>
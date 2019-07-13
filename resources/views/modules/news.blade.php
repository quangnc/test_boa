<div class="gdlr-item-title-wrapper gdlr-item pos-left pos-left-divider ">
    <div class="gdlr-item-title-head">
        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">@lang('home.news_from_us')</h3>
        <div class="clear"></div>
    </div>
    <div class="gdlr-item-title-divider"></div>
</div>
<div class="blog-item-wrapper">
    <div class="blog-item-holder">
        @isset($data_blog_posts)
        @foreach($data_blog_posts as $data_blog_posts)
            <div class="gdlr-item gdlr-blog-widget">
                <div class="gdlr-ux gdlr-blog-widget-ux">
                    <article id="post-862" class="post-862 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row tag-blog tag-link tag-news">
                        <div class="gdlr-standard-style">
                            <div class="blog-date-wrapper gdlr-title-font">
                                <?php 
                                    $data = date_create($data_blog_posts['blog_post']->created_at);
                                ?> 
                                <span class="blog-date-day">{{ date_format($data,"d") }}</span>
                                <span class="blog-date-month">{{ date_format($data,"M") }}</span>
                            </div>
                            <header class="post-header">
                                <h3 class="gdlr-blog-title">
                                    <a href="{{ $data_blog_posts['slug'] }}">{{ $data_blog_posts['blog_post_description']->name }}</a>
                                </h3>
                                <div class="gdlr-blog-excerpt"> {{ $data_blog_posts['blog_post_description']->description }} </div>
                                <div class="clear"></div>
                            </header>
                            <!-- entry-header -->
                            <div class="clear"></div>
                        </div>
                    </article>
                    <!-- #post -->
                </div>
            </div>
        @endforeach
        @endisset
        <a class="blog-widget-right-text-link" href="{{ route('blogs') }}">Read All News
            <i class="fa fa-long-arrow-right icon-long-arrow-right"></i>
        </a>
    </div>
</div>
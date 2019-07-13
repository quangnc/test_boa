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
                    <div class="with-sidebar-left eight columns">
                        <div class="with-sidebar-content twelve columns">
                            <section id="content-section-1">
                                <div class="section-container container">
                                    <div class="blog-item-wrapper">
                                        <div class="blog-item-holder">
                                            <div class="gdlr-isotope" data-type="blog" data-layout="fitRows">
                                                <div class="clear"></div>
                                                @isset($blogs)
                                                <?php $i = 9; ?>
                                                @foreach($blogs as $blog)
                                                    <div class="twelve columns">
                                                        <div class="gdlr-item gdlr-blog-grid">
                                                            <div class="gdlr-ux gdlr-blog-grid-ux">
                                                                <article id="post-859"
                                                                        class="post-859 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row">
                                                                    <div class="gdlr-standard-style">
                                                                        <div class="gdlr-blog-thumbnail">
                                                                            <a href=" {{ route('detail-blog', $blog->post_id) }} "> 
                                                                                @isset($blog_images)
                                                                                @foreach($blog_images as $blog_image)
                                                                                    @if( $blog->post_id === $blog_image['blog_id'])
                                                                                    <img
                                                                                            src=" {{ $blog_image['image_thumb'] }} "
                                                                                            alt=" {{ $blog_image['image_thumb'] }} " width="960" height="643">
                                                                                    </a>
                                                                                    @endif
                                                                                @endforeach
                                                                                @endisset
                                                                            @if( $i%9 == 0 )
                                                                            <div class="gdlr-sticky-banner">
                                                                                <i class="fa fa-bullhorn"></i> Sticky Post
                                                                            </div>
                                                                            @endif
                                                                        </div>

                                                                        <div class="gdlr-blog-info gdlr-info">
                                                                            <div class="blog-info blog-date">
                                                                                <i class="fa fa-clock-o"></i>
                                                                                <a href=" {{ route('detail-blog', $blog->post_id) }} ">{{ date_format($blog->created_at,"d M Y") }}</a>
                                                                            </div>
                                                                            <div class="clear"></div>
                                                                        </div>

                                                                        <header class="post-header">
                                                                            <h3 class="gdlr-blog-title">
                                                                                <a href=" {{ route('detail-blog', $blog->post_id) }} "> {{ $blog->blog_post_descriptions[0]->name }}</a>
                                                                            </h3>
                                                                            <div class="clear"></div>
                                                                        </header>
                                                                        <!-- entry-header -->

                                                                        <div class="gdlr-blog-content">{{ $blog->blog_post_descriptions[0]->description }}
                                                                            <div class="clear"></div>
                                                                            <a href=" {{ route('detail-blog', $blog->post_id) }} " class="excerpt-read-more">Continue
                                                                                Reading<i
                                                                                        class="fa fa-long-arrow-right icon-long-arrow-right"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </article>
                                                                <!-- #post -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <?php $i++; ?>
                                                @endforeach
                                                @endisset

                                            </div>
                                        </div>
                                        <div class="gdlr-pagination">
                                            @isset ($blogs)
                                                <div class="clear"></div>
                                                <div class="gdlr-pagination">
                                                    {{ $blogs->links('vendor.pagination.bootstrap-4') }}   
                                                </div>
                                            @endisset 
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </section>
                        </div>

                        <div class="clear"></div>
                    </div>

                    <div class="gdlr-sidebar gdlr-right-sidebar four columns">
                        <div class="gdlr-item-start-content sidebar-right-item">
                            <div id="search-3" class="widget widget_search gdlr-item gdlr-widget">
                                <div class="gdl-search-form">
                                    <form method="get" id="searchform" action="#">
                                        <div class="search-text" id="search-text">
                                            <input type="text" name="s" id="s" autocomplete="off"
                                                   data-default="Type keywords...">
                                        </div>
                                        <input type="submit" id="searchsubmit" value="">
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                            <div id="text-2" class="widget widget_text gdlr-item gdlr-widget">
                                <h3 class="gdlr-widget-title">Text Widget</h3>
                                <div class="clear"></div>
                                <div class="textwidget">Morbi leo risus, porta ac consectetur ac, vest ibulum at eros.
                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Sed posuere
                                    consectetur est at lobortis.
                                </div>
                            </div>
                            <div id="gdlr-recent-portfolio-widget-2"
                                 class="widget widget_gdlr-recent-portfolio-widget gdlr-item gdlr-widget">
                                <h3 class="gdlr-widget-title">Recent Works</h3>
                                <div class="clear"></div>
                                <div class="gdlr-recent-port-widget">
                                    <div class="recent-post-widget">
                                        <div class="recent-post-widget-thumbnail">
                                            <a href="#"><img src="upload\demo\140H-150x150.jpg" alt="" width="150"
                                                             height="150"></a>
                                        </div>
                                        <div class="recent-post-widget-content">
                                            <div class="recent-post-widget-title"><a href="#">Thumbnail open
                                                    lightbox</a></div>
                                            <div class="recent-post-widget-info">
                                                <div class="blog-info blog-date"><i class="fa fa-clock-o"></i><a
                                                            href="#">04 Dec 2013</a></div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="recent-post-widget">
                                        <div class="recent-post-widget-thumbnail">
                                            <a href="#"><img src="upload\demo\156H-150x150.jpg" alt="" width="150"
                                                             height="150"></a>
                                        </div>
                                        <div class="recent-post-widget-content">
                                            <div class="recent-post-widget-title"><a href="#">Thumbnail link to post</a>
                                            </div>
                                            <div class="recent-post-widget-info">
                                                <div class="blog-info blog-date"><i class="fa fa-clock-o"></i><a
                                                            href="#">04 Dec 2013</a></div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="recent-post-widget">
                                        <div class="recent-post-widget-thumbnail">
                                            <a href="#"><img src="upload\demo\157H-150x150.jpg" alt="" width="150"
                                                             height="150"></a>
                                        </div>
                                        <div class="recent-post-widget-content">
                                            <div class="recent-post-widget-title"><a href="#">Open video lightbox</a>
                                            </div>
                                            <div class="recent-post-widget-info">
                                                <div class="blog-info blog-date"><i class="fa fa-clock-o"></i><a
                                                            href="#">04 Dec 2013</a></div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div id="recent-comments-3" class="widget widget_recent_comments gdlr-item gdlr-widget">
                                <h3 class="gdlr-widget-title">Recent Comments</h3>
                                <div class="clear"></div>
                                <ul id="recentcomments">
                                    <li class="recentcomments"><span class="comment-author-link">John Doe</span> on <a
                                                href="#">Magna pars studiorum</a></li>
                                    <li class="recentcomments"><span class="comment-author-link">John Doe</span> on <a
                                                href="#">Eiusmod tempor incidunt</a></li>
                                    <li class="recentcomments"><span class="comment-author-link">John Doe</span> on <a
                                                href="#">Eiusmod tempor incidunt</a></li>
                                    <li class="recentcomments"><span class="comment-author-link">John Doe</span> on <a
                                                href="#">Donec luctus imperdiet</a></li>
                                    <li class="recentcomments"><span class="comment-author-link">John Doe</span> on <a
                                                href="#">Nihilne te nocturnum</a></li>
                                </ul>
                            </div>
                            <div id="tag_cloud-2" class="widget widget_tag_cloud gdlr-item gdlr-widget">
                                <h3 class="gdlr-widget-title">Tag Cloud</h3>
                                <div class="clear"></div>
                                <div class="tagcloud">
                                    <a href="#" style="font-size: 8pt;" aria-label="Animal (1 item)">Animal</a>
                                    <a href="#" style="font-size: 8pt;" aria-label="Aside (1 item)">Aside</a>
                                    <a href="#" style="font-size: 11.230769230769pt;"
                                       aria-label="Audio (2 items)">Audio</a>
                                    <a href="#" style="font-size: 19.666666666667pt;"
                                       aria-label="Blog (8 items)">Blog</a>
                                    <a href="#" style="font-size: 15.179487179487pt;" aria-label="Business (4 items)">Business</a>
                                    <a href="#" style="font-size: 8pt;" aria-label="Gallery Thumbnail (1 item)">Gallery
                                        Thumbnail</a>
                                    <a href="#" style="font-size: 13.384615384615pt;" aria-label="identity (3 items)">identity</a>
                                    <a href="#" style="font-size: 22pt;" aria-label="Life Style (11 items)">Life
                                        Style</a>
                                    <a href="#" style="font-size: 11.230769230769pt;"
                                       aria-label="Link (2 items)">Link</a>
                                    <a href="#" style="font-size: 16.615384615385pt;"
                                       aria-label="News (5 items)">News</a>
                                    <a href="#" style="font-size: 15.179487179487pt;"
                                       aria-label="Post format (4 items)">Post format</a>
                                    <a href="#" style="font-size: 8pt;" aria-label="Quote (1 item)">Quote</a>
                                    <a href="#" style="font-size: 8pt;" aria-label="Safari (1 item)">Safari</a>
                                    <a href="#" style="font-size: 8pt;" aria-label="Travel (1 item)">Travel</a>
                                    <a href="#" style="font-size: 8pt;" aria-label="Video (1 item)">Video</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <!-- Below Sidebar Section-->

        </div>
        <!-- gdlr-content -->
        <div class="clear"></div>
    </div>
@endsection
@extends('layouts.app')

@section('content')

    <div id="gdlr-header-substitute"></div>

    {{--Content Top--}}
    @include('layouts.content_top')

    <div class="content-wrapper">
        <div class="gdlr-content">
            <!-- Sidebar With Content Section-->
            <div class="with-sidebar-wrapper">
                <div class="with-sidebar-container container">
                    <div class="with-sidebar-left twelve columns">
                        <div class="with-sidebar-content twelve columns">
                            <section id="content-section-1">
                                <div class="section-container container">
                                    <div class="blog-item-wrapper">
                                        <div class="blog-item-holder">
                                            <div class="gdlr-isotope" data-type="blog" data-layout="fitRows">
                                                <div class="clear"></div>
                                                    <div class="twelve columns">
                                                        <div class="gdlr-item gdlr-blog-grid">
                                                            <div class="gdlr-ux gdlr-blog-grid-ux">
                                                                <article id="post-859"
                                                                        class="post-859 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row">
                                                                    <div class="gdlr-standard-style">
                                                                        <div class="gdlr-blog-thumbnail blog-post">
                                                                            <a href=" {{ route('detail-blog', $blog->post_id) }} "> 
                                                                                <img src=" {{ asset('upload').'/'.$blog->image }} " alt=" {{ $blog->image }} " width="960" height="643">
                                                                            </a>
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
                                                                                <a href=" {{ route('detail-blog', $blog->post_id) }} "> {{ $blog_description->name }}</a>
                                                                            </h3>
                                                                            <div class="clear"></div>
                                                                        </header>
                                                                        <!-- entry-header -->

                                                                        <div class="gdlr-blog-content">
                                                                            {{ $blog_description->description }}
                                                                        </div>
                                                                    </div>
                                                                </article>
                                                                <!-- #post -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>

                                            </div>
                                        </div>
                                        <div class="gdlr-pagination">
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </section>
                        </div>

                        <div class="clear"></div>
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
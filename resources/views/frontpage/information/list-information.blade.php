@extends('layouts.app')
@section('content')

<div id="main-content">
    <h1 class="title" id="page-title" style="margin-bottom: 0"> {{ $title }} </h1>
    <div class="region region-content">
        <div id="block-system-main" class="block block-system">
            <div class="content">
                <div class="view view-taxonomy-tin-tuc view-id-taxonomy_tin_tuc view-display-id-page">
                    <div class="view-content ">
                        @isset($blogPostFind)
                            @foreach ($blogPostFind as $item)
                                <?php $blog_description = $item->blog_post_descriptions->where('language_id', $language)->first(); ?>
                                <div class="views-row views-row-1 views-row-odd views-row-first">
                                    <div class="views-field views-field-nothing">
                                        <span class="field-content">
                                        <div class="uk-grid uk-grid-collapse">
                                            <div class="uk-width-1-2 uk-width-medium-1-4 uk-flex uk-flex-center anh_term">
                                                <figure class="uk-overlay uk-overlay-hover">
                                                    <div class="">
                                                        <a href="{{ route('detailPost', [$item->post_id, $item->blog_category_id]) }}">
                                                            <img src="{{ asset('public/upload').'/'.$item->image }}" width="140" alt="{{ asset('public/upload').'/'.$item->image }}">
                                                        </a>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="uk-width-1-2 uk-width-medium-3-4 noidung_term">
                                                <div class="tieude_tin">
                                                <a href="{{ route('detailPost', [$item->post_id, $item->blog_category_id]) }}">{{ $blog_description->name }}</a></div>
                                                <div class="ngaytao_tin">
                                                    <i class="uk-icon-calendar"></i> 
                                                    {{ Carbon\Carbon::parse($item->update_at)->format('d/m/Y') }}
                                                </div>
                                                <div class="mota_tin"></div>
                                                <div class="link_term">
                                                    <a href="{{ route('detailPost', [$item->post_id, $item->blog_category_id]) }}">Thêm</a>
                                                </div>
                                            </div>
                                        </div>
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 @include('frontpage.sidebar-right')
@endsection

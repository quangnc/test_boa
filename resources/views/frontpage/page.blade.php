@extends('layouts.app')

@section('content')

    <div id="gdlr-header-substitute">
    </div>

    <div class="gdlr-page-title-wrapper" style="background-image: url({{ Storage::url('images/page-title-dark.jpg') }})">
        <div class="gdlr-page-title-overlay"></div>
        <div class="gdlr-page-title-container container">
            <h1 class="gdlr-page-title">{!! $page['name'] !!}</h1>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="gdlr-content">

            <div class="with-sidebar-wrapper">
                <div class="with-sidebar-container container gdlr-class-no-sidebar">
                    {!! $page['content'] !!}
                    <div class="clear"></div>
                    @include('layouts.content_bottom')
                </div>
            </div>
        </div>
        <!-- gdlr-content -->
        <div class="clear"></div>
    </div>
    
@endsection
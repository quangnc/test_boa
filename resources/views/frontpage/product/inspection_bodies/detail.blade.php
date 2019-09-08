@extends('layouts.app')
@section('content')
@include('frontpage.sidebar-left')
<div id="main-content">
    <div class="region region-content">
       <div id="block-system-main" class="block block-system">
          <div class="content">
            <div id="node-13711" class="node node-dich-vu clearfix">
                @isset($blog_description)
                    {!! $blog_description->content !!}
                @endisset
            </div>
          </div>
       </div>
    </div>
 </div>
 @include('frontpage.sidebar-right')
@endsection

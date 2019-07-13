@extends('admin.master')
@section('title', 'Module Slideshow')
@section('content')
<?php
    $arr = ['Enable', 'Disable'];
?>  
    <div class="container-fluid">
        <form action="{{ $data['action'] }}" method="POST" id="{{ $data['form'] }}">
            {{ csrf_field() }}
            @if (isset($data['id']))
                <input name="_method" type="hidden" value="PATCH">
            @endif
            <slideshow input-name="slide" :value="{{ isset($data['slide']) ? json_encode($data['slide']) : '[]'}}"></slideshow>
        </form>
    </div>
@endsection
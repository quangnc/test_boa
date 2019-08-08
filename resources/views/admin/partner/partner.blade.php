@extends('admin.master')
@section('title', 'Module partner')
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
            <partner input-name="partner" :value="{{ isset($data['partner']) ? json_encode($data['partner']) : '[]'}}"></partner>
        </form>
    </div>
@endsection
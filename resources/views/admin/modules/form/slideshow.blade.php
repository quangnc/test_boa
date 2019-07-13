@extends('admin.master')
@section('title', 'Module Slideshow')
@section('content')
    <div class="container-fluid">
        <form action="{{ $data['action'] }}" method="POST" id="{{ $data['form'] }}">
            {{ csrf_field() }}
            @if (isset($data['id']))
                <input name="_method" type="hidden" value="PATCH">
            @endif
            <input name="module[code]" type="hidden" value="{{ $data['code'] }}">
            <div class="row" style="margin-bottom: 20px">
                <label class="col-2 text-right" for="input-name">Module Name</label>
                <div class="col-10">
                    <input type="text" name="module[name]" value="{{ isset($data['name']) ? $data['name'] : '' }}" placeholder="Module Name" id="input-name" class="form-control">
                </div>
            </div>

            <div class="row" style="margin-bottom: 20px">
                <label class="col-2 text-right" for="input-name">Status</label>
                <div class="col-10">
                    <select class="form-control" name="module[status]">
                        @foreach($data['statusOptions'] as $key => $option)
                            <option value="{{ $key }}" {{ $data['status'] == $key ? 'selected' : "" }}>{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <slideshow input-name="module[images]" :value="{{ isset($data['images']) ? json_encode($data['images']) : '[]'}}"></slideshow>
        </form>
    </div>
@endsection
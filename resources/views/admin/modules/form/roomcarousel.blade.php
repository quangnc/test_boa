@extends('admin.master')
@section('title', 'Home Room Carousel')
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

            <div class="row" style="margin-bottom: 20px">
                <label class="col-2 text-right" for="input-title-carousel">Title Carousel Room</label>
                <div class="col-10">
                    <input 
                        type="text" 
                        name="module[title_carousel]" 
                        value="{{ isset($data['title_carousel']) ? $data['title_carousel'] : '' }}" 
                        placeholder="Title Carousel Room" 
                        id="input-title-carousel" 
                        class="form-control"
                    >
                </div>
            </div>

            <div class="row" style="margin-bottom: 20px">
                <label class="col-2 text-right" for="input-column-carousel-room">Number Carousel room </label>
                <div class="col-10">
                    <input 
                        type="number" 
                        name="module[col_carousel_room]" 
                        value="{{ isset($data['col_carousel_room']) ? $data['col_carousel_room'] : '' }}" 
                        placeholder="Number room" 
                        id="input-column-carousel-room" 
                        class="form-control"
                    >
                </div>
            </div>
        </form>
    </div>
@endsection
@extends('admin.master')
@section('title', 'Layout Form')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="{{ $data['action'] }}" method="POST" id="{{ $data['form'] }}">
                    {{ csrf_field() }}
                    @if (isset($data['id']) && $data['id'])
                        <input name="_method" type="hidden" value="PATCH">
                    @endif

                    <div class="row" style="margin-bottom: 20px">
                        <label class="col-2 text-right" for="input-name">Layout Name</label>
                        <div class="col-10">
                            <input type="text" name="name" value="{{ isset($data['name']) ? $data['name'] : '' }}" placeholder="Layout Name" id="input-name" class="form-control">
                        </div>
                    </div>

                    <div class="row" style="margin-bottom: 20px">
                        <label class="col-2 text-right" for="input-name">Layout Route</label>
                        <div class="col-10">
                            <input type="text" name="route" value="{{ isset($data['route']) ? $data['route'] : '' }}" placeholder="Layout Route" id="input-name" class="form-control">
                        </div>
                    </div>

                    <layout :modules="{{ $data['modules'] }}" :layouts="{{ json_encode($data['layouts']) }}" />
                </form>
            </div>
        </div>
    </div>
@endsection

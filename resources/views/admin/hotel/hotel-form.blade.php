@extends('admin.master')
@section('title', 'Create hotel')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="tabs">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#general">Genenal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#data">Data</a>
                        </li>
                        <li class="nav-item">
                            <a href="#property" data-toggle="tab" class="nav-link">Property Facilities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#image">Image</a>
                        </li>
                    </ul>
                </div>

                <!-- Tab panes -->
                <form action="{{ $data['action'] }}" method="POST" id="{{ $data['form'] }}">
                    {{ csrf_field() }}
                    @if ($data['action'] != route( 'hotel.index' )) 
                    <input name="_method" type="hidden" value="PATCH">
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="tab-content" style="padding-top: 20px">
                        <div class="tab-pane active" id="general">
                            @include('admin.hotel.components.general')
                        </div>
                        <div class="tab-pane" id="data">
                            @include('admin.hotel.components.data')
                        </div>
                        <div class="tab-pane" id="image">
                            @include('admin.hotel.components.image')
                        </div>
                        <div class="tab-pane" id="property">
                            @include('admin.hotel.components.property')
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
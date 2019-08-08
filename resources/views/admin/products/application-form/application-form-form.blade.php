@extends('admin.master')
@section('title', 'Create Application Form')
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
                        {{-- <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#image">Image</a>
                        </li> --}}
                    </ul>
                </div>

                <!-- Tab panes -->
                <form action="{{ $data['action'] }}" method="POST" id="{{ $data['form'] }}">
                    {{ csrf_field() }}
                    @if ($data['action'] != route( 'application-form.index' )) 
                        <input name="_method" type="hidden" value="PATCH">
                    @endif
                    
                    <div class="tab-content" style="padding-top: 20px">
                        <div class="tab-pane active" id="general">
                            @include('admin.products.application-form.components.general')
                        </div>
                        <div class="tab-pane" id="data">
                            @include('admin.products.application-form.components.data')
                        </div>
                        {{-- <div class="tab-pane" id="image">
                            @include('admin.products.application-form.components.image')
                        </div> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
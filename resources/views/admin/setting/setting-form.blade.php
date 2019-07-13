@extends('admin.master')
@section('title', 'Setting')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="tabs">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#general">Genenal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#info">Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#image">Image</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#local">Local</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#config">Config</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#footer">Footer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#message">Message</a>
                        </li>
                    </ul>
                </div>

                <!-- Tab panes -->
                <form action="{{ $data['action'] }}" method="POST" id="{{ $data['form'] }}">
                    {{ csrf_field() }}
                    <div class="tab-content" style="padding-top: 20px">
                        <div class="tab-pane active" id="general">
                            @include('admin.setting.tabs.general')
                        </div>
                        <div class="tab-pane" id="info">
                            @include('admin.setting.tabs.info')
                        </div>
                        <div class="tab-pane" id="image">
                            @include('admin.setting.tabs.image')
                        </div>
                        <div class="tab-pane" id="local">
                            @include('admin.setting.tabs.local')
                        </div>
                        <div class="tab-pane" id="config">
                            @include('admin.setting.tabs.config')
                        </div>
                        <div class="tab-pane" id="footer">
                            @include('admin.setting.tabs.footer')
                        </div>
                        <div class="tab-pane" id="contact">
                            @include('admin.setting.tabs.contact')
                        </div>
                        <div class="tab-pane" id="message">
                            @include('admin.setting.tabs.message')
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
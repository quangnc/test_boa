@extends('admin.master')
@section('title', 'Detail Contact')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Detail Contact
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="content-contact">
                            <div class="name">
                                <label for="name">Tên người liên hệ: </label> {{ $data['contact']->name }}
                            </div>
                            <div class="email;">
                                <label for="email">Email người liên hệ: </label> {{ $data['contact']->email }}
                            </div>
                            <div class="message">
                                <label for="message">Nội dung liên hệ: </label> {{ $data['contact']->message }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
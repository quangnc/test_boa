@extends('admin.master')
@section('title', 'Module List')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Module List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="">Module Name</th>
                        <th class="">Status</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data['modules'] as $module)
                        @include('admin.modules.module-heading')
                        @include('admin.modules.module-data')
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
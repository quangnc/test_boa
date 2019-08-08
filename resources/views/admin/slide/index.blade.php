@extends('admin.master')
@section('title', 'List Slide')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Slide List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 1px">ID</th>
                        <th class="">image</th>
                        <th class="">title</th>
                        <th class="">Sort Order</th>
                        <th class="">Status</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($data['slides'])
                        @foreach ($data['slides'] as $slide)
                            <tr>
                                <td scope="row">{{ $slide->id }}</td>
                                <td style="width: 500px;"><img src=" {{ asset('upload').'/'.$slide->image }} " alt=" {{ $slide->image }} " width="500" height="257"></td>
                                <td>{{ $slide->title }}</td>
                                <td>{{ $slide->sort_order }}</td>
                                <td>{{ $slide->status == 0 ? "Enable" :  "Disable" }}</td>
                                <td class="text-right">
                                    <form id="delete-{{$slide->id}}" action="{{ route('slide.destroy', ['id'=>$slide->id]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$slide->id}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a style="margin-right: 5px" href="{{ route('slide.edit', ['id'=>$slide['id']]) }}"
                                       class="btn btn-primary pull-right">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endisset
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
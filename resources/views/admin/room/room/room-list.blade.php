@extends('admin.master')
@section('title', 'Room List')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Room
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 1px">ID</th>
                        <th class="">Room Name</th>
                        <th class="">Room rate</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($room_lists)
                        @foreach ($room_lists as $room)
                            <tr>
                                <th scope="row">{{ $room['room'] ?  $room['room']->room_id : "" }}</th>
                                <td>{{ $room['room_descriptions'] ? $room['room_descriptions']->name : "" }}</td>
                                <td>{{ $room['room'] ? $room['room']->price : "" }}</td>
                                <td class="text-right">
                                    <a style="margin-right: 5px" href="{{ route('get-duplicate', ['id'=>$room['room']->room_id]) }}"
                                    class="btn btn-primary pull-right">
                                        <i class="fa fa-square-o" aria-hidden="true"></i>
                                    </a>
                                    <form id="delete-{{$room['room']->room_id}}" action="{{ route('room.destroy', ['id'=>$room['room']->room_id]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$room['room']->room_id}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>

                                    <a style="margin-right: 5px" href="{{ route('room.edit', ['id'=>$room['room']->room_id]) }}"
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
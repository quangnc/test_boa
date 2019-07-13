@extends('admin.master')
@section('title', 'Room Type List')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Room Type
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 1px">ID</th>
                        <th class="">Type Name</th>
                        <th class="">Sort Order</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($room_type)
                        @foreach ($room_type as $room_type)
                            <tr>
                                <th scope="row">{{ $room_type['id'] }}</th>
                                <td>{{ $room_type['room_type_name'] }}</td>
                                <td>{{ $room_type['sort_order'] }}</td>
                                <td class="text-right">
                                    <form id="delete-{{$room_type['id']}}" action="{{ route('room-type.destroy', ['id'=>$room_type['id']]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$room_type['id']}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a style="margin-right: 5px" href="{{ route('room-type.edit', ['id'=>$room_type['id']]) }}"
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
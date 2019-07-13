@extends('admin.master')
@section('title', 'Room facility list')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Room Facility List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 1px">ID</th>
                        <th class="">Property Facility Name</th>
                        <th class="">Property Facility Group Name</th>
                        <th class="">Sort Order</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($room_facility)
                        @foreach ($room_facility as $facility)
                            <tr>
                                <th scope="row">{{ $facility['id'] }}</th>
                                <td>{{ $facility['facility_name'] }}</td>
                                <td>{{ $facility['facility_group_name'] }}</td>
                                <td>{{ $facility['sort_order'] }}</td>
                                <td class="text-right">
                                    <form id="delete-{{$facility['id']}}" action="{{ route('room-facility.destroy', ['id'=>$facility['id']]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$facility['id']}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a style="margin-right: 5px" href="{{ route('room-facility.edit', ['id'=>$facility['id']]) }}"
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
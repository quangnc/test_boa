@extends('admin.master')
@section('title', 'Room facility group List')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Room Facility Group List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 1px">ID</th>
                        <th class="">Property Facility Group Name</th>
                        <th class="">Sort Order</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($room_facility_groups)
                        @foreach ($room_facility_groups as $facility_group)
                            <tr>
                                <th scope="row">{{ $facility_group['id'] }}</th>
                                <td>{{ $facility_group['name'] }}</td>
                                <td>{{ $facility_group['sort_order'] }}</td>
                                <td class="text-right">
                                    <form id="delete-{{$facility_group['id']}}" action="{{ route('room-facility-group.destroy', ['id'=>$facility_group['id']]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$facility_group['id']}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a style="margin-right: 5px" href="{{ route('room-facility-group.edit', ['id'=>$facility_group['id']]) }}"
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
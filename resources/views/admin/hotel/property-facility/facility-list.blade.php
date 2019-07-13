@extends('admin.master')
@section('title', 'Trang chủ')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Facility List
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
                    @isset($data['property_facility'])
                        @foreach ($data['property_facility'] as $property_facility)
                            <tr>
                                <th scope="row">{{ $property_facility['id'] }}</th>
                                <td>{{ $property_facility['property_facility_name'] }}</td>
                                <td>{{ $property_facility['property_facility_group_name'] }}</td>
                                <td>{{ $property_facility['sort_order'] }}</td>
                                <td class="text-right">
                                    <form id="delete-{{$property_facility['id']}}" action="{{ route('property-facility.destroy', ['id'=>$property_facility['id']]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$property_facility['id']}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a style="margin-right: 5px" href="{{ route('property-facility.edit', ['id'=>$property_facility['id']]) }}"
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
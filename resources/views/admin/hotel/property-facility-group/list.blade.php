@extends('admin.master')
@section('title', 'Property Facility Group')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Facility Group List
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
                    @isset($property_facility_groups)
                        @foreach ($property_facility_groups as $property_facility_group)
                            <tr>
                                <th scope="row">{{ $property_facility_group['id'] }}</th>
                                <td>{{ $property_facility_group['name'] }}</td>
                                <td>{{ $property_facility_group['sort_order'] }}</td>
                                <td class="text-right">
                                    <form id="delete-{{$property_facility_group['id']}}" action="{{ route('property-facility-group.destroy', ['id'=>$property_facility_group['id']]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$property_facility_group['id']}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a style="margin-right: 5px" href="{{ route('property-facility-group.edit', ['id'=>$property_facility_group['id']]) }}"
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
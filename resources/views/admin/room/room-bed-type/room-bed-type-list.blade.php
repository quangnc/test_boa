@extends('admin.master')
@section('title', 'Bed type list')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Room Bed Type
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 1px">ID</th>
                        <th class="">Bed Type Name</th>
                        <th class="">Sort Order</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($data['bed_type'])
                        @foreach ($data['bed_type'] as $bed_type)
                            <tr>
                                <th scope="row">{{ $bed_type['id'] }}</th>
                                <td>{{ $bed_type['bed_type_name'] }}</td>
                                <td>{{ $bed_type['sort_order'] }}</td>
                                <td class="text-right">
                                    <form id="delete-{{$bed_type['id']}}" action="{{ route('room-bed-type.destroy', ['id'=>$bed_type['id']]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$bed_type['id']}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a style="margin-right: 5px" href="{{ route('room-bed-type.edit', ['id'=>$bed_type['id']]) }}"
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
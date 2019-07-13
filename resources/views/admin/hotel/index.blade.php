@extends('admin.master')
@section('title', 'List Hotel')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Hotel List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 1px">ID</th>
                        <th class="">Name</th>
                        <th class="">Sort Order</th>
                        <th class="">Status</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($data['hotels'])
                        @foreach ($data['hotels'] as $hotel)
                            <tr>
                                <th scope="row">{{ $hotel['id'] }}</th>
                                <td>{{ $hotel['name'] }}</td>
                                <td>{{ $hotel['sort_order'] }}</td>
                                <td>{{ $hotel['status'] == 0 ? "Enable" :  "Disable" }}</td>
                                <td class="text-right">
                                    <form id="delete-{{$hotel['id']}}" action="{{ route('hotel.destroy', ['id'=>$hotel['id']]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$hotel['id']}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a style="margin-right: 5px" href="{{ route('hotel.edit', ['id'=>$hotel['id']]) }}"
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
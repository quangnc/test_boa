@extends('admin.master')
@section('title', 'Cruise List')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Cruise List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 1px">ID</th>
                        <th class="">Cruise Name</th>
                        <th class="">Cruise Price 2 Day</th>
                        <th class="">Cruise Price 3 Day</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($cruise_lists)
                        @foreach ($cruise_lists as $cruise)
                            <tr>
                                <th scope="row">{{ $cruise['cruise'] ?  $cruise['cruise']->id : "" }}</th>
                                <td>{{ $cruise['cruise'] ? $cruise['cruise']->code : "" }}</td>
                                <td>{{ $cruise['cruise'] ? $cruise['cruise']->price_2_day : "" }}</td>
                                <td>{{ $cruise['cruise'] ? $cruise['cruise']->price_3_day : "" }}</td>
                                <td class="text-right">
                                    <form id="delete-{{$cruise['cruise']->id}}" action="{{ route('cruise.destroy', ['id'=>$cruise['cruise']->id]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$cruise['cruise']->id}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>

                                    <a style="margin-right: 5px" href="{{ route('cruise.edit', ['id'=>$cruise['cruise']->id]) }}"
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
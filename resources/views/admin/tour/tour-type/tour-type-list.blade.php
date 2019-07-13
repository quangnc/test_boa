@extends('admin.master')
@section('title', 'Tour Type List')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                tour Type
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
                    @isset($tour_types)
                        @foreach ($tour_types as $tour_type)
                            <tr>
                                <th scope="row">{{ $tour_type['tour_types']->tour_type_id }}</th>
                                <td>{{ $tour_type['tour_type_descriptions']->name }}</td>
                                <td>{{ $tour_type['tour_types']->sort_order }}</td>
                                <td class="text-right">
                                    <form id="delete-{{ $tour_type['tour_types']->tour_type_id  }}" action="{{ route('tour-type.destroy', ['id'=>$tour_type['tour_types']->tour_type_id ]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$tour_type['tour_types']->tour_type_id }}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a style="margin-right: 5px" href="{{ route('tour-type.edit', ['id'=> $tour_type['tour_types']->tour_type_id ]) }}"
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
@extends('admin.master')
@section('title', 'Tour Duration List')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Tour Duration
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
                    @isset($tour_durations)
                        @foreach ($tour_durations as $tour_duration)
                            <tr>
                                <th scope="row">{{ $tour_duration['id'] }}</th>
                                <td>{{ $tour_duration['tour_duration_name'] }}</td>
                                <td>{{ $tour_duration['sort_order'] }}</td>
                                <td class="text-right">
                                    <form id="delete-{{$tour_duration['id']}}" action="{{ route('tour-duration.destroy', ['id'=>$tour_duration['id']]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$tour_duration['id']}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a style="margin-right: 5px" href="{{ route('tour-duration.edit', ['id'=>$tour_duration['id']]) }}"
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
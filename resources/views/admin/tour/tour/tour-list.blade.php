@extends('admin.master')
@section('title', 'Tour List')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Tour
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 1px">ID</th>
                        <th class="">Tour Code</th>
                        <th class="">Tour rate</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($tour_lists)
                        @foreach ($tour_lists as $tour)
                            <tr>
                                <th scope="row">{{ $tour['tour'] ?  $tour['tour']->id : "" }}</th>
                                <td>{{ $tour['tour'] ? $tour['tour']->code : "" }}</td>
                                <td>{{ $tour['tour'] ? $tour['tour']->price : "" }}</td>
                                <td class="text-right">
                                    <form id="delete-{{$tour['tour']->id}}" action="{{ route('tour.destroy', ['id'=>$tour['tour']->id]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$tour['tour']->id}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>

                                    <a style="margin-right: 5px" href="{{ route('tour.edit', ['id'=>$tour['tour']->id]) }}"
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
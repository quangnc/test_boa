@extends('admin.master')
@section('title', 'Layout List')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Layout List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 1px">ID</th>
                        <th class="">Layout Name</th>
                        <th class="">Sort Order</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($data['layouts'])
                        @foreach ($data['layouts'] as $layout)
                            <tr>
                                <th scope="row">{{ $layout['layout_id'] }}</th>
                                <td>{{ $layout['name'] }}</td>
                                <td>{{ $layout['sort_order'] }}</td>
                                <td class="text-right">
                                    <form id="delete-{{$layout['layout_id']}}" action="{{ route('layout.destroy', ['id'=>$layout['layout_id']]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <a class="btn btn-danger pull-right" onclick="confirm('Are you sure?') ? $('#delete-{{$layout['layout_id']}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </form>
                                    <a style="margin-right: 5px" href="{{ route('layout.edit', ['id'=>$layout['layout_id']]) }}"
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
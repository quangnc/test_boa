@extends('admin.master')
@section('title', 'Blog category')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Blog category 
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 1px">ID</th>
                        <th class="">Page Name</th>
                        <th class="">slug</th>
                        <th class="">Status</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($pages)
                        @foreach ($pages as $page)
                            <tr>
                                <th scope="row">{{ $page['id'] }}</th>
                                <td>{{ $page['name'] }}</td>
                                <td>{{ $page['slug'] }}</td>
                                <td>{{ $page['status'] == 1 ? "Enable" :  "Disable" }}</td>
                                <td class="text-right">
                                    <form id="delete-{{$page['id']}}" action="{{ route('page.destroy', ['id'=>$page['id']]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$page['id']}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a style="margin-right: 5px" href="{{ route('page.edit', ['id'=>$page['id']]) }}"
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
@extends('admin.master')
@section('title', 'Menu')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Menu
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
                    @isset($data['blog_post'])
                        @foreach ($data['blog_post'] as $blog_post)
                            <tr>
                                <th scope="row">{{ $blog_post['id'] }}</th>
                                <td>{{ $blog_post['blog_post_name'] }}</td>
                                <td>{{ $blog_post['blog_post_sort_order'] }}</td>
                                <td>{{ $blog_post['blog_post_status'] == 0 ? "Enable" :  "Disable" }}   </td>
                                <td class="text-right">
                                    <form id="delete-{{$blog_post['id']}}" action="{{ route('menu.destroy', ['id'=>$blog_post['id']]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$blog_post['id']}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a style="margin-right: 5px" href="{{ route('menu.edit', ['id'=>$blog_post['id']]) }}"
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
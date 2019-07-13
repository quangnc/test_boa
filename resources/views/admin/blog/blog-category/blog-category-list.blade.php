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
                        <th class="">Blog category Name</th>
                        <th class="">Blog category Description</th>
                        <th class="">Sort Order</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($data['blog_category'])
                        @foreach ($data['blog_category'] as $blog_category)
                            <tr>
                                <th scope="row">{{ $blog_category['id'] }}</th>
                                <td>{{ $blog_category['blog_category_name'] }}</td>
                                <td>{{ $blog_category['blog_category_description'] }}</td>
                                <td>{{ $blog_category['blog_category_sort_order'] }}</td>
                                <td class="text-right">
                                    <form id="delete-{{$blog_category['id']}}" action="{{ route('blog-category.destroy', ['id'=>$blog_category['id']]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$blog_category['id']}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a style="margin-right: 5px" href="{{ route('blog-category.edit', ['id'=>$blog_category['id']]) }}"
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
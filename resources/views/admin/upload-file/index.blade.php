@extends('admin.master')
@section('title', 'List Slide')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Slide List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 1px">ID</th>
                        <th class="">title</th>
                        <th class="">Product</th>
                        <th class="">Sort Order</th>
                        <th class="">Status</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($data['uploadFiles'])
                        @foreach ($data['uploadFiles'] as $file)
                        <?php $product = $file->product->product_descriptions->where('language_id', $language)->first(); ?>
                            <tr>
                                <td scope="row">{{ $file->id }}</td>
                                <td>{{ $file->title }}</td>
                                <td>{{$product->name}}</td>
                                <td>{{ $file->sort_order }}</td>
                                <td>{{ $file->status == 0 ? "Enable" :  "Disable" }}</td>
                                <td class="text-right">
                                    <form id="delete-{{$file->id}}" action="{{ route('upload-file.destroy', ['id'=>$file->id]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$file->id}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endisset
                    </tbody>
                </table>
                {{ $data['uploadFiles']->render() }}
            </div>
        </div>
    </div>
@endsection
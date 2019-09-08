@extends('admin.master')
@section('title', 'List Partner')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Partner List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 1px">ID</th>
                        <th class="">image</th>
                        
                        <th class="">name</th>
                        <th class="">Sort Order</th>
                        <th class="">Status</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($data['partners'])
                        @foreach ($data['partners'] as $partner)
                            <tr>
                                <th scope="row">{{ $partner->id }}</th>
                                <td style="width: 300px;"><img src=" {{ asset('upload').'/'.$partner->image }} " alt=" {{ $partner->image }} " width="300" height="150"></td>
                                <td>{{ $partner->name }}</td>
                                <td>{{ $partner->sort_order }}</td>
                                <td>{{ $partner->status == 0 ? "Enable" :  "Disable" }}</td>
                                <td class="text-right">
                                    <form id="delete-{{$partner->id}}" action="{{ route('partner.destroy', ['id'=>$partner->id]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$partner->id}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a style="margin-right: 5px" href="{{ route('partner.edit', ['id'=>$partner->id]) }}"
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
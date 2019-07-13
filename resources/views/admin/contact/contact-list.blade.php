@extends('admin.master')
@section('title', 'List Contact')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                List Contact
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 1px">ID</th>
                        <th class=""> Name</th>
                        <th class="">Gmail</th>
                        <th class="">Message</th>
                        <th class="">Read</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($data['contact'])
                        @foreach ($data['contact'] as $contact)
                            <tr>
                                <th scope="row">{{ $contact['contact_id'] }}</th>
                                <td>{{ $contact['name'] }}</td>
                                <td>{{ $contact['email'] }}</td>
                                <td>{{ Helper::text_limit($contact['message']) }}</td>
                                <td>{{ $contact['read'] === 0 ? "Chưa xem" :  "Đã xem" }}</td>
                                <td class="text-right">
                                    <form id="delete-{{$contact['contact_id']}}" action="{{ route('admin-contact.destroy', ['id'=>$contact['contact_id']]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$contact['contact_id']}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a style="margin-right: 5px" 
                                        href="{{ route('admin-contact.show', ['id'=>$contact['contact_id']]) }}"
                                        class="btn btn-primary pull-right"
                                    >
                                        <i class="fa fa-eye"></i>
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
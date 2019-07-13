@extends('admin.master')
@section('title', 'List Booking')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                List Booking 
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 1px">ID</th>
                        <th class="">Last Name</th>
                        <th class="">Email</th>
                        <th class="">Telephone</th>
                        <th class="">Total Price</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($books)
                        @foreach ($books as $book)
                            <tr>
                                <th scope="row">{{ $book ? $book->book_id : "" }}</th>
                                <td>{{ $book ? $book->last_name : ""  }}</td>
                                <td>{{ $book ? $book->email : ""  }}</td>
                                <td>{{ $book ? $book->telephone : ""  }}</td>
                                <td>{{ $book ? $book->total : ""  }}</td>
                                <td class="text-right">
                                    <form id="delete-{{$book['book_id']}}" action="{{ route('booking.destroy', ['id'=>$book['book_id']]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$book['book_id']}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a style="margin-right: 5px" 
                                        href="{{ route('booking.show', ['id'=>$book['book_id']]) }}"
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
            <div class="card-footer">
                @isset ($books)
                    <div class="clear"></div>
                    <div class="gdlr-pagination">
                        {{ $books->links('vendor.pagination.bootstrap-4') }}   
                    </div>
                @endisset 
            </div>
        </div>
    </div>
@endsection
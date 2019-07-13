@extends('admin.master')
@section('title', 'Tour Review')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Tour Review List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 1px">ID</th>
                        <th class="">Author</th>
                        <th class="">Rating</th>
                        <th class="">Status</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($tour_reviews)
                        @foreach ($tour_reviews as $review)
                            <tr>
                                <th scope="row">{{ $review->review_id }}</th>
                                <td>{{ $review->author }}</td>
                                <td>{{ $review->rating }}</td>
                                <td>{{ $review->status == 0 ? "Enable" :  "Disable" }}</td>
                                <td class="text-right">
                                    <form id="delete-{{$review->review_id}}" action="{{ route('tour-review.destroy', ['id'=>$review->review_id]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$review->review_id}}').submit() : false;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a style="margin-right: 5px" href="{{ route('tour-review.edit', ['id'=>$review->review_id]) }}"
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
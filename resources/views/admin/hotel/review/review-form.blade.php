@extends('admin.master')
@section('title', 'Hotel Review')
@section('content')
<?php
    $arr = ['Enable', 'Disable'];
?>  
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ $data['action'] }}" method="POST" id="{{ $data['form'] }}">
                    {{ csrf_field() }}
                    @if ($data['action'] != route( 'review.index' ))
                        <input name="_method" type="hidden" value="PATCH">
                    @endif
                    <input 
                        type="hidden" 
                        name="review[hotel_id]" 
                        value="1"
                    >
                    <div class="form-group">
                        <label for="txtAuthor">Author</label>
                        <input 
                            value="{{ $review->author or old('review.author') }}"
                            type="text" 
                            class="form-control" 
                            id="txtAuthor" 
                            placeholder="Name Author"
                            name="review[author]"
                        />
                    </div>

                    <div class="form-group">
                        <label for="txtTitle">Title review</label>
                        <input 
                            value="{{ $review->title or old('review.title') }}"
                            type="text" 
                            class="form-control" 
                            id="txtTitle" 
                            placeholder="Title Review"
                            name="review[title]"
                        />
                    </div>

                    <div class="form-group">
                        <label for="text">Text</label>
                        <textarea class="form-control"  name="review[text]"
                                  rows="3" placeholder="Text ..."><?php echo isset($review->text) ? $review->text : old("review.text") ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="txtRating">Rating</label>
                        <input 
                            value="{{ $review->rating or old('review.rating') }}"
                            type="number" 
                            class="form-control" 
                            id="txtRating" 
                            placeholder="Rating"
                            name="review[rating]"
                        />
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="review[status]">
                            @foreach($arr as $key => $arr)
                                <option value="{{ $key }}" {{ isset($review->status) && $review->status == $key || old('review.status') ? 'selected' : "" }}>{{ $arr }}</option>
                            @endforeach 
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

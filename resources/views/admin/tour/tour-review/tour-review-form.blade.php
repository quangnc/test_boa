@extends('admin.master')
@section('title', 'Tour Review')
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
                    @if ($data['action'] != route( 'tour-review.index' ))
                        <input name="_method" type="hidden" value="PATCH">
                    @endif
                    <div class="form-group">
                        <label>Tour </label>
                        <select class="form-control" name="tour_review[tour_id]">
                            @isset($tours)
                            @foreach($tours as $key => $tour)
                                <option value="{{ $tour['tour']->id }}" 
                                    {{ isset($tour_review->tour_id) && $tour_review->tour_id == $tour['tour']->id ? 'selected' : "" }}>
                                    {{ $tour['tour_descriptions']->name }}
                                </option>
                            @endforeach 
                            @endisset
                        </select>
                    </div> 

                    <div class="form-group">
                        <label for="txtAuthor">Author</label>
                        <input 
                            value="{{ $tour_review->author or old('tour_review.author') }}"
                            type="text" 
                            class="form-control" 
                            id="txtAuthor" 
                            placeholder="Name Author"
                            name="tour_review[author]"
                        />
                    </div>

                    <div class="form-group">
                        <label for="txtTitle">Title tour_review</label>
                        <input 
                            value="{{ $tour_review->title or old('tour_review.title') }}"
                            type="text" 
                            class="form-control" 
                            id="txtTitle" 
                            placeholder="Title tour_review"
                            name="tour_review[title]"
                        />
                    </div>

                    <div class="form-group">
                        <label for="text">Text</label>
                        <textarea class="form-control"  name="tour_review[text]"
                                  rows="3" placeholder="Text ..."><?php echo isset($tour_review->text) ? $tour_review->text : old("tour_review.text") ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="txtRating">Rating</label>
                        <input 
                            value="{{ $tour_review->rating or old('tour_review.rating') }}"
                            type="number" 
                            class="form-control" 
                            id="txtRating" 
                            placeholder="Rating"
                            name="tour_review[rating]"
                        />
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="tour_review[status]">
                            @foreach($arr as $key => $arr)
                                <option value="{{ $key }}" {{ isset($tour_review->status) && $tour_review->status == $key ? 'selected' || old('tour_review.status') : "" }}>{{ $arr }}</option>
                            @endforeach 
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

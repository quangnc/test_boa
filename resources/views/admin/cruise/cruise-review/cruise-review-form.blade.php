@extends('admin.master')
@section('title', 'Cruise Review')
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
                    @if ($data['action'] != route( 'cruise-review.index' ))
                        <input name="_method" type="hidden" value="PATCH">
                    @endif
                    <div class="form-group">
                        <label>Cruise </label>
                        <select class="form-control" name="cruise_review[cruise_id]">
                            @isset($cruises)
                            @foreach($cruises as $key => $cruise)
                                <option value="{{ $cruise['cruise']->id }}" 
                                    {{ isset($cruise_review->cruise_id) && $cruise_review->cruise_id == $cruise['cruise']->id || old('cruise_review.cruise_id')  ? 'selected' : "" }}>
                                    {{ $cruise['cruise_descriptions']->name }}
                                </option>
                            @endforeach 
                            @endisset
                        </select>
                    </div> 

                    <div class="form-group">
                        <label for="txtAuthor">Author</label>
                        <input 
                            value="{{ $cruise_review->author or old('cruise_review.author') }}"
                            type="text" 
                            class="form-control" 
                            id="txtAuthor" 
                            placeholder="Name Author"
                            name="cruise_review[author]"
                        />
                    </div>

                    <div class="form-group">
                        <label for="txtTitle">Title Cruise Review</label>
                        <input 
                            value="{{ $cruise_review->title or old('cruise_review.title') }}"
                            type="text" 
                            class="form-control" 
                            id="txtTitle" 
                            placeholder="Title cruise_review"
                            name="cruise_review[title]"
                        />
                    </div>

                    <div class="form-group">
                        <label for="text">Text</label>
                        <textarea class="form-control"  name="cruise_review[text]"
                                  rows="3" placeholder="Text ..."><?php echo isset($cruise_review->text) ? $cruise_review->text : old("cruise_review.text") ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="txtRating">Rating</label>
                        <input 
                            value="{{ $cruise_review->rating or old('cruise_review.rating') }}"
                            type="number" 
                            class="form-control" 
                            id="txtRating" 
                            placeholder="Rating"
                            name="cruise_review[rating]"
                        />
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="cruise_review[status]">
                            @foreach($arr as $key => $arr)
                                <option value="{{ $key }}" {{ isset($cruise_review->status) && $cruise_review->status == $key ? 'selected' : "" }}>{{ $arr }}</option>
                            @endforeach 
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

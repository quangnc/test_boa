@extends('admin.master')
@section('title', 'Module Slideshow')
@section('content')
<?php
    $arr = ['Enable', 'Disable'];
    $arrLoai = ['Biểu mẫu', 'Tài liệu'];
?>  
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-body">
                <form action="{{ $data['action'] }}" enctype="multipart/form-data" method="POST" id="{{ $data['form'] }}">
                    {{ csrf_field() }}
                    @if (isset($data['id']))
                        <input name="_method" type="hidden" value="PATCH">
                    @endif
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control" id="name" placeholder="Title"
                            name="title"
                            value=""
                        >
                    </div>
                    <div class="form-group">
                            <label for="txtSortOrder">Sort order</label>
                            <input 
                                value="{{ isset($blog_post->sort_order) ? $blog_post->sort_order : old('blog_post.sort_order') }}" 
                                type="number" 
                                class="form-control" 
                                id="txtSortOrder" 
                                placeholder="Name" 
                                name="sort_order" 
                            >
                        </div>
                    
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            @foreach($arr as $key => $arr)
                                <option 
                                    value="{{ $key }}"
                                >
                                    {{ $arr }}
                                </option>
                            @endforeach 
                        </select>
                    </div>
                    <div class="form-group">
                            <label>Loại</label>
                            <select class="form-control" name="loai">
                                @foreach($arrLoai as $key => $arr)
                                    <option 
                                        value="{{ $key }}"
                                    >
                                        {{ $arr }}
                                    </option>
                                @endforeach 
                            </select>
                        </div>
                    <div class="form-group">
                            <label>Product</label>
                            <select class="form-control" name="product_id">
                                @isset($blog_post_categories)
                                @foreach($blog_post_categories as $blog_post_category)
                                    <option 
                                        value="{{ $blog_post_category->product_id }}" 
                                        {{ isset($blog_post) && $blog_post->product_id == $blog_post_category->product_id ? "selected" : ""  }}
                                    >
                                        {{ $blog_post_category->name  }}
                                    </option>
                                @endforeach 
                                @endisset
                            </select>
                            @if($errors->has('blog_post.blog_category') && !old("blog_post.blog_category"))
                                <p style="color:red">{{$errors->first('blog_post.blog_category')}}</p>
                            @endif
                        </div>
                    <div class="form-group">
                        <label for="upload">Upload File</label>
                        <div>
                                <input 
                                type="file"
                                name="file"
                                id="upload"
                            />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


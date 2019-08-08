<?php
    $arr = ['Enable', 'Disable'];
?>  
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card card-primary">
    <div class="card-body">
        <div class="form-group">
            <label for="txtSortOrder">Sort order</label>
            <input 
                value="{{ isset($blog_post->sort_order) ? $blog_post->sort_order : old('blog_post.sort_order') }}" 
                type="number" 
                class="form-control" 
                id="txtSortOrder" 
                placeholder="Name" 
                name="blog_post[sort_order]" 
            >
            @if($errors->has('blog_post.sort_order') && !old("blog_post.sort_order"))
                <p style="color:red">{{$errors->first('blog_post.sort_order')}}</p>
            @endif
        </div>

        <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="blog_post[status]">
                @foreach($arr as $key => $arr)
                    <option 
                        value="{{ $key }}"
                        {{ isset($data['blog_post_edit']) && $data['blog_post_edit']->status === $key ? 'selected' : ""  }}
                    >
                        {{ $arr }}
                    </option>
                @endforeach 
            </select>
            @if($errors->has('blog_post.status') && !old("blog_post.status"))
                <p style="color:red">{{$errors->first('blog_post.status')}}</p>
            @endif
        </div>

        <div class="form-group">
            <label>Product</label>
            <select class="form-control" name="blog_post[product_id]">
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
            <label for="txtBlogTag">link</label>
            <input 
                value="{{ isset($blog_tag->link) ? $blog_tag->link : old('blog_tag.link') }}" 
                type="text" 
                class="form-control" 
                id="txtBlogTag" 
                placeholder="Blog Tag Name " 
                name="blog_tag[link]" 
            >
            @if($errors->has('blog_tag.link') && !old("blog_tag.link"))
                <p style="color:red">{{ $errors->first('blog_tag.link') }}</p>
            @endif
        </div>
    </div>
</div>
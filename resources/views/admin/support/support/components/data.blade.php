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
            <label for="phone">Phone</label>
            <input 
                value="{{ isset($blog_post->phone) ? $blog_post->phone : old('blog_post.phone') }}" 
                type="number" 
                class="form-control" 
                id="phone" 
                placeholder="Phone" 
                name="blog_post[phone]" 
            >
            @if($errors->has('blog_post.phone') && !old("blog_post.phone"))
                <p style="color:red">{{$errors->first('blog_post.phone')}}</p>
            @endif
        </div>

        <div class="form-group">
            <label for="linkSkype">Link Skype</label>
            <input 
                value="{{ isset($blog_post->linkSkype) ? $blog_post->linkSkype : old('blog_post.linkSkype') }}" 
                type="text" 
                class="form-control" 
                id="linkSkype" 
                placeholder="Link Skype" 
                name="blog_post[linkSkype]" 
            >
            @if($errors->has('blog_post.linkSkype') && !old("blog_post.linkSkype"))
                <p style="color:red">{{$errors->first('blog_post.linkSkype')}}</p>
            @endif
        </div>
    </div>
</div>
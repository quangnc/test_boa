<choose-image value="{{ isset($blog_post['image']) ? $blog_post['image'] : old('blog_post.image') }}"
              id="blog-post-image"
              input-name="blog_post[image]">
</choose-image>
@if($errors->has(`blog_post.image`) && !old("blog_post.image"))
    <p style="color:red">{{$errors->first(`blog_post.image`)}}</p>
@endif
{{--  <list-images :value="{{ $blog_post['images'] or old('blog_post.images') }}"
             id="blog-post-images"
             input-name="images">
</list-images>  --}}
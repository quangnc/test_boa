<div class="card card-primary">
    <div class="card-body">
        <div class="form-group">
            <label for="txtSortOrder">Sort order</label>
            <input 
                value="{{ isset($blog_category->sort_order) ? $blog_category->sort_order : old('sort_order') }}" 
                type="number" 
                class="form-control" 
                id="txtSortOrder" 
                placeholder="sort order" 
                name="blog_category[sort_order]" 
            >
            @if($errors->has('blog_category.sort_order') && !old("blog_category.sort_order"))
                <p style="color:red">{{$errors->first('blog_category.sort_order')}}</p>
            @endif
        </div>
    </div>
</div>
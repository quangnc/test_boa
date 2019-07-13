<?php
    $options = [ 1 => 'Enable', 0 => 'Disable' ];
?>

@extends('admin.master')
@section('title', 'Create Page')
@section('content')
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

                    @if (isset($page['page_id']))
                        <input name="_method" type="hidden" value="PATCH">
                    @endif

                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="page[status]">
                            @foreach($options as $key => $arr)
                                <option
                                        value="{{ $key }}"
                                        {{ isset($page['status']) && $page['status'] === $key ? 'selected' : ""  }}
                                >
                                    {{ $arr }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" class="form-control" id="slug" placeholder="slug"
                               name="page[slug]"
                               value="{{ $page['slug'] or old('page.slug') }}"
                        >
                    </div>

                    <ul class="nav nav-tabs languages">
                        @isset($languages)
                            @foreach ($languages as $language)
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab"
                                       href="#{{ $language->name }}">{{ $language->name }}</a>
                                </li>
                            @endforeach
                        @endisset
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        @isset($languages)
                            @foreach ($languages as $language)
                                <div class="tab-pane" id="{{ $language->name }}">
                                    <div class="card">
                                        <div class="card-body">

                                            <input type="hidden"
                                                   name="page_descriptions[{{ $language->language_id }}][language_id]"
                                                   value="{{ $language->language_id }}"
                                            >

                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" id="name" placeholder="Name"
                                                       name="page_descriptions[{{ $language->language_id }}][name]"
                                                       value="{{ isset($page_descriptions[$language->language_id]['name']) ? $page_descriptions[$language->language_id]['name'] : old("page_descriptions.".$language->language_id.".name") }}"
                                                >
                                            </div>

                                            <div class="form-group">
                                                <label for="description">Content</label>
                                                <textarea class="ckeditor"
                                                          name="page_descriptions[{{ $language->language_id }}][content]"
                                                ><?php echo isset( $page_descriptions[ $language->language_id ]['content'] ) ? $page_descriptions[ $language->language_id ]['content'] : old( "page_descriptions." . $language->language_id . ".content" ) ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="meta_title">Meta Title</label>
                                                <input type="text" class="form-control" id="meta_title"
                                                       placeholder="Meta Title"
                                                       name="page_descriptions[{{ $language->language_id }}][meta_title]"
                                                       value="<?php echo isset( $page_descriptions[ $language->language_id ]['meta_title'] ) ? $page_descriptions[ $language->language_id ]['meta_title'] : old( "page_descriptions." . $language->language_id . ".meta_title" ) ?>"
                                                >
                                            </div>
                                            <div class="form-group">
                                                <label for="meta_description"> Meta Description</label>
                                                <textarea class="form-control"
                                                          name="page_descriptions[{{ $language->language_id }}][meta_description]"
                                                          rows="3"
                                                          placeholder="Meta Description ..."><?php echo isset( $page_descriptions[ $language->language_id ]['meta_description'] ) ? $page_descriptions[ $language->language_id ]['meta_description'] : old( "page_descriptions." . $language->language_id . ".meta_description" ) ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="txtMetaKeyWork">Meta Keyword</label>
                                                <textarea class="form-control"
                                                          name="page_descriptions[{{ $language->language_id }}][meta_keyword]"
                                                          rows="3"
                                                          placeholder="Meta Keyword ..."><?php echo isset( $page_descriptions[ $language->language_id ]['meta_keyword'] ) ? $page_descriptions[ $language->language_id ]['meta_keyword'] : old( "page_descriptions." . $language->language_id . ".meta_keyword" ) ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endisset
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
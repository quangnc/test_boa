@extends('admin.master')
@section('title', 'Destination')
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
                    @if ($data['action'] != route( 'destination.index' )) 
                        <input name="_method" type="hidden" value="PATCH">
                    @endif
                    @isset($languages)
                    @foreach ($languages as $language)
                        <input 
                            type="hidden" 
                            name="destination_descriptions[{{ $language->language_id }}][language_id]" 
                            value="{{ $language->language_id }}"
                        >
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">{{ $language->name}}</span>
                            </div>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    name="destination_descriptions[{{ $language->language_id }}][name]"  
                                    value="{{ isset($destination_descriptions[$language->language_id]['name']) ? $destination_descriptions[$language->language_id]['name'] : old("destination_descriptions.".$language->language_id.".name") }}"

                                />
                        </div>
                        @endforeach
                    @endisset

                    <div class="form-group">
                        <label for="txtSortOrder">Sort order</label>
                        <input 
                            value="{{ $destination->sort_order or old('destination.sort_order') }}" 
                            type="number" 
                            class="form-control" 
                            id="txtSortOrder" 
                            placeholder="Sort order" 
                            name="destination[sort_order]" 
                        />
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
@endsection
    
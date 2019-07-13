@extends('admin.master')
@section('title', 'Room Facility Group Form')
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
                    @if ($data['action'] != route( 'room-facility-group.index' )) 
                        <input name="_method" type="hidden" value="PATCH">
                    @endif
                    @isset($languages)
                    @foreach ($languages as $language)
                        <input 
                            type="hidden" 
                            name="facility_group_descriptions[{{ $language->language_id }}][language_id]" 
                            value="{{ $language->language_id }}"
                        >
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">{{ $language->name}}</span>
                            </div>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    name="facility_group_descriptions[{{ $language->language_id }}][name]"  
                                    value="{{ isset($facility_group_descriptions[$language->language_id]) ? $facility_group_descriptions[$language->language_id]['name'] : old("facility_group_descriptions.".$language->language_id.".name") }}"
                                />
                        </div>
                        @endforeach
                    @endisset
                    <div class="form-group">
                        <label for="txtSortOrder">Sort order</label>
                        <input 
                            value="{{ $facility_group->sort_order or old('facility_group.sort_order') }}" 
                            type="number" 
                            class="form-control" 
                            id="txtSortOrder" 
                            placeholder="Name" 
                            name="facility_group[sort_order]" 
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

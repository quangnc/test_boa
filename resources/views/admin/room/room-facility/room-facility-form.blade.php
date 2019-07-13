@extends('admin.master')
@section('title', 'Facility Form')
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
                    @if ($data['action'] != route( 'room-facility.index' )) 
                        <input name="_method" type="hidden" value="PATCH">
                    @endif
                    @isset($languages)
                    @foreach ($languages as $language)
                        <input 
                            type="hidden" 
                            name="facility_descriptions[{{ $language->language_id }}][language_id]" 
                            value="{{ $language->language_id }}"
                        >
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">{{ $language->name}}</span>
                            </div>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    name="facility_descriptions[{{ $language->language_id }}][name]"  
                                    value="{{ isset($facility_descriptions[$language->language_id]['name']) ? $facility_descriptions[$language->language_id]['name'] : old("facility_descriptions.".$language->language_id.".name") }}"
                                />
                        </div>
                        @endforeach
                    @endisset

                    <div class="form-group">
                        <label>Property Facility Group Name</label>
                        <select class="form-control" name="facility[facility_group_id]">
                        @isset($facility_group_descriptions)
                            @foreach ($facility_group_descriptions as $facility_group_description)
                                <option 
                                    value="{{$facility_group_description->facility_group_id}}" 
                                    {{ isset($facility_group_id) && $facility_group_id  == $facility_group_description->facility_group_id ? "selected" || old('facility.facility_group_id') : "" }}>{{ $facility_group_description->name }}</option>
                            @endforeach
                        @endisset
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="txtSortOrder">Sort order</label>
                        <input 
                            value="{{ $facility->sort_order or old('facility.sort_order') }}" 
                            type="number" 
                            class="form-control" 
                            id="txtSortOrder" 
                            placeholder="Sort order" 
                            name="facility[sort_order]" 
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

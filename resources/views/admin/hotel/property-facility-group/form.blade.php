@extends('admin.master')
@section('title', 'Facility Group List')
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
                    @if ($data['action'] != route( 'property-facility-group.index' ))
                        <input name="_method" type="hidden" value="PATCH">
                    @endif
                    @isset($languages)
                    @foreach ($languages as $language)
                        <input type="hidden"
                               name="property_facility_group_descriptions[{{ $language->language_id }}][language_id]"
                               value="{{ $language->language_id }}"
                        />
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">{{ $language->name}}</span>
                            </div>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    name="property_facility_group_descriptions[{{ $language->language_id }}][name]"
                                    value="{{ isset($property_facility_group_descriptions[$language->language_id]['name']) ? $property_facility_group_descriptions[$language->language_id]['name'] : old("property_facility_group_descriptions.".$language->language_id.".name") }}"
                                />
                        </div>
                        @endforeach
                    @endisset
                    <div class="form-group">
                        <label for="txtSortOrder">Sort order</label>
                        <input 
                            value="{{ $property_facility_group['sort_order'] or old('property_facility_group.sort_order') }}"
                            type="number" 
                            class="form-control" 
                            id="txtSortOrder" 
                            placeholder="Sort order"
                            name="property_facility_group[sort_order]"
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

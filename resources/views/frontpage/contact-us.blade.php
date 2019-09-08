@push('scripts')
<script type='text/javascript' src='{{ asset('interface/pageHome/plugins\google-map-plugin\assets\js\maps.js') }}'></script>

    <script>
        var map;
        function initMap() {
            var lat = {{ $setting['lat'] }};
            var lng = {{ $setting['lng'] }};
            map = new google.maps.Map(document.getElementById('map1'), {
                center: {
                    lat: lat,
                    lng: lng
                },
                zoom: 16
            });
            var marker = new google.maps.Marker({
                position: {
                    lat: lat,
                    lng: lng
                },
                map: map
            });
        }
    </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAI_7NJcXtt9bV4QymiiICtsUQYggKZecY&callback=initMap"
    async defer></script>
@endpush
@extends('layouts.app')
@section('content')

<div id="main-content">
    <h1 class="title" id="page-title">
        Liên hệ			
    </h1>
    <div id="navigation">
        <div class="tabs-secondary clearfix">
            <ul class="tabs secondary"></ul>
        </div>
    </div>
    <div class="region region-content">
        <div id="block-system-main" class="block block-system">
            <div class="content">
                <div id="node-49" class="node node-webform clearfix">
                <div class="content">
                    <div class="group-khung field-group-div uk-grid">
                        <div class="group-khung1 field-group-div uk-width-1-1 uk-width-medium-5-10">
                            <div class="field field-name-field-webform-noidung field-type-text-long field-label-hidden">
                                <div class="field-items">
                                    <div class="field-item even"><strong>VIỆN CÔNG NHẬN CHẤT LƯỢNG VIỆT NAM&nbsp;</strong><br>
                                        <br>
                                        <strong>Hà Nội:&nbsp;</strong><br style="color: rgb(0, 0, 0); font-family: arial, Tahoma, &quot;Times New Roman&quot;; font-size: 12px; line-height: normal; white-space: nowrap;">
                                        Địa chỉ: Số 52, ngõ 46, đường Liên Mạc, phường Liên Mạc, quận Bắc Từ Liêm, TP.Hà Nộii&nbsp;<br>
                                        Hotline: 024.22.66.1111 &nbsp;<br>
                                        Email:&nbsp;<a href="mailto:congnhan.vaci@gmail.com">congnhan.vaci@gmail.com</a>&nbsp;<br style="color: rgb(0, 0, 0); font-family: arial, Tahoma, &quot;Times New Roman&quot;; font-size: 12px; line-height: normal; white-space: nowrap;">
                                    </div>
                                    <div class="gdlr-item gdlr-content-item" style="margin-bottom: 0px;">
                                            <div class="wpgmp_map_container wpgmp-map-1" rel="map1">
                                                <div class="wpgmp_map " style="width:100%; height:450px;" id="map1"></div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="group-khung2 field-group-div uk-width-1-1 uk-width-medium-5-10">
                            <form class="webform-client-form webform-client-form-49" enctype="multipart/form-data" action="{{ route('add-contact') }}" method="post" id="webform-client-form-49" accept-charset="UTF-8">
                            {{ csrf_field() }}
                            @if (isset($success))
                                <div class="alert alert-success">{{ $success }} </div>
                            @endif
                            <div>
                                <div class="form-item webform-component webform-component-textfield webform-component--ho-ten">
                                    <label class="element-invisible" for="edit-submitted-ho-ten">Họ tên <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>
                                    <input 
                                        required="required" 
                                        placeholder="Họ tên" 
                                        type="text" 
                                        id="edit-submitted-ho-ten" 
                                        name="name" 
                                        value="{{ old('name') }}" 
                                        size="60" maxlength="128" 
                                        class="form-text required">
                                    @if($errors->has('name') && !old("name"))
                                        <p style="color:red">{{$errors->first('name')}}</p>
                                    @endif
                                </div>
                                <div class="form-item webform-component webform-component-textfield webform-component--dia-chi">
                                    <label class="element-invisible" for="edit-submitted-dia-chi">Địa chỉ <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>
                                    <input required="required" placeholder="Địa chỉ" type="text" id="edit-submitted-dia-chi" name="address" value="{{ old('address') }}" size="60" maxlength="128" class="form-text required">
                                    @if($errors->has('address') && !old("address"))
                                        <p style="color:red">{{$errors->first('address')}}</p>
                                    @endif
                                </div>
                                <div class="form-item webform-component webform-component-textfield webform-component--dien-thoai">
                                    <label class="element-invisible" for="edit-submitted-dien-thoai">Điện thoại </label>
                                    <input placeholder="Điện thoại" type="text" id="edit-submitted-dien-thoai" name="phone" value="{{ old('phone') }}" size="60" maxlength="128" class="form-text">
                                    @if($errors->has('phone') && !old("phone"))
                                        <p style="color:red">{{$errors->first('phone')}}</p>
                                    @endif
                                </div>
                                <div class="form-item webform-component webform-component-email webform-component--email">
                                    <label class="element-invisible" for="edit-submitted-email">Email <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>
                                    <input required="required" class="email form-text form-email required" placeholder="Email" type="email" value="{{ old('email') }}" id="edit-submitted-email" name="email" size="60">
                                    @if($errors->has('email') && !old("email"))
                                        <p style="color:red">{{$errors->first('email')}}</p>
                                    @endif
                                </div>
                                <div class="form-item webform-component webform-component-textarea webform-component--noi-dung">
                                    <label class="element-invisible" for="edit-submitted-noi-dung">Nội dung <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>
                                    <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea">
                                        <textarea required="required" placeholder="Nội dung" id="edit-submitted-noi-dung" name="message" cols="60" rows="5" class="form-textarea required">{{ old('message') }}</textarea>
                                        <div class="grippie"></div>
                                        @if($errors->has('message') && !old("message"))
                                            <p style="color:red">{{$errors->first('message')}}</p>
                                        @endif
                                    </div>
                                </div>
                                <input type="hidden" name="details[sid]">
                                <input type="hidden" name="details[page_num]" value="1">
                                <input type="hidden" name="details[page_count]" value="1">
                                <input type="hidden" name="details[finished]" value="0">
                                <input type="hidden" name="form_build_id" value="form-tiSm0VVhMDUyxZAOjdygad5LWQOXeTyhmth9L4mzx_8">
                                <input type="hidden" name="form_id" value="webform_client_form_49">
                                <div class="form-actions"><input class="webform-submit button-primary form-submit" type="submit" name="op" value="Gửi yêu cầu"></div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
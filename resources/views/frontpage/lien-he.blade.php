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
                                        <div class="field-item even"><strong>VĂN PHÒNG CÔNG NHẬN CHẤT LƯỢNG&nbsp;</strong><br>
                                            <br>
                                            <strong>Hà Nội:&nbsp;</strong><br style="color: rgb(0, 0, 0); font-family: arial, Tahoma, &quot;Times New Roman&quot;; font-size: 12px; line-height: normal; white-space: nowrap;">
                                            Số 8 Hoàng Quốc Việt, Quận Cầu Giấy, Hà Nội&nbsp;<br>
                                            Tel: 024.3791 1552 &nbsp; Fax: 024.3791 1551&nbsp;<br>
                                            Email:&nbsp;<a href="mailto:vpcongnhan@boa.gov.vn">vpcongnhan@boa.gov.vn</a>&nbsp;<br style="color: rgb(0, 0, 0); font-family: arial, Tahoma, &quot;Times New Roman&quot;; font-size: 12px; line-height: normal; white-space: nowrap;">
                                            <br style="color: rgb(0, 0, 0); font-family: arial, Tahoma, &quot;Times New Roman&quot;; font-size: 12px; line-height: normal; white-space: nowrap;">
                                            <strong>Tp. Hồ Chí Minh:&nbsp;</strong><br style="color: rgb(0, 0, 0); font-family: arial, Tahoma, &quot;Times New Roman&quot;; font-size: 12px; line-height: normal; white-space: nowrap;">
                                            P.203, Nhà B, 31 Hàn Thuyên, Quận 1, TP. Hồ Chí Minh<br>
                                            Tel: 028.3827 0482 &nbsp; Fax: 028.3827 0481&nbsp;<br>
                                            Email:&nbsp;<a href="mailto:vpcongnhan.hcm@boa.gov.vn">vpcongnhan.hcm@boa.gov.vn</a><br>
                                            <iframe allowfullscreen="" frameborder="0" height="350" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6202029740916!2d105.80061831450512!3d21.047877385988002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab22d8cdee8b%3A0x2c7451294843e09e!2zOCBIb8OgbmcgUXXhu5FjIFZp4buHdCwgTmdoxKlhIMSQw7QsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1483518827166" style="border:0" width="100%"></iframe>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="group-khung2 field-group-div uk-width-1-1 uk-width-medium-5-10">
                                    <form class="webform-client-form webform-client-form-49" enctype="multipart/form-data" action="/vi/lien-he" method="post" id="webform-client-form-49" accept-charset="UTF-8">
                                    <div>
                                        <div class="form-item webform-component webform-component-textfield webform-component--ho-ten">
                                            <label class="element-invisible" for="edit-submitted-ho-ten">Họ tên <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>
                                            <input required="required" placeholder="Họ tên" type="text" id="edit-submitted-ho-ten" name="submitted[ho_ten]" value="" size="60" maxlength="128" class="form-text required">
                                        </div>
                                        <div class="form-item webform-component webform-component-textfield webform-component--dia-chi">
                                            <label class="element-invisible" for="edit-submitted-dia-chi">Địa chỉ <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>
                                            <input required="required" placeholder="Địa chỉ" type="text" id="edit-submitted-dia-chi" name="submitted[dia_chi]" value="" size="60" maxlength="128" class="form-text required">
                                        </div>
                                        <div class="form-item webform-component webform-component-textfield webform-component--dien-thoai">
                                            <label class="element-invisible" for="edit-submitted-dien-thoai">Điện thoại </label>
                                            <input placeholder="Điện thoại" type="text" id="edit-submitted-dien-thoai" name="submitted[dien_thoai]" value="" size="60" maxlength="128" class="form-text">
                                        </div>
                                        <div class="form-item webform-component webform-component-email webform-component--email">
                                            <label class="element-invisible" for="edit-submitted-email">Email <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>
                                            <input required="required" class="email form-text form-email required" placeholder="Email" type="email" id="edit-submitted-email" name="submitted[email]" size="60">
                                        </div>
                                        <div class="form-item webform-component webform-component-textarea webform-component--noi-dung">
                                            <label class="element-invisible" for="edit-submitted-noi-dung">Nội dung <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>
                                            <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea">
                                                <textarea required="required" placeholder="Nội dung" id="edit-submitted-noi-dung" name="submitted[noi_dung]" cols="60" rows="5" class="form-textarea required"></textarea>
                                                <div class="grippie"></div>
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
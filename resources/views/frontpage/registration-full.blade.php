@extends('layouts.app')

@section('content')
<div id="sidebar-left">
    <div class="region region-sidebar-left">
        @include('frontpage.registration')
    </div>
</div>
<div id="main-content">
    <h1 class="title" id="page-title"><span>Đơn đăng ký công nhận</span></h1>
    <div id="navigation">
        <div class="tabs-secondary clearfix">
            <ul class="tabs secondary"></ul>
        </div>
    </div>
    <div class="region region-content">
        <div id="block-system-main" class="block block-system">
            <div class="content">
                <form class="node-form node-dang_ky-form" enctype="multipart/form-data" action="/vi/node/add/dang-ky?dangky_dv=abc+d%C3%A8&amp;dangky_email=abc%40gmail.com&amp;dangky_dt=24234324&amp;dangky_ms=32423&amp;chondichvu=256" method="post" id="dang-ky-node-form" accept-charset="UTF-8">
                <div>
                    <div class="field-type-markup field-name-field-dangky-mkprint field-widget-markup form-wrapper" id="edit-field-dangky-mkprint">
                        <div id="field-dangky-mkprint-add-more-wrapper"></div>
                    </div>
                    <input type="hidden" name="changed" value="">
                    <input type="hidden" name="form_build_id" value="form-0hKMB7ToGxrm-6C2tEJXVO0kD-XHrRFHcgm46adzBms">
                    <input type="hidden" name="form_id" value="dang_ky_node_form">
                    <div class="required-fields group-khung field-group-div uk-grid">
                        <div class="required-fields group-khung1 field-group-div uk-width-1-1 uk-width-medium-1-2">
                            <div class="field-type-text field-name-field-dangky-ten field-widget-text-textfield form-wrapper" id="edit-field-dangky-ten">
                            <div id="field-dangky-ten-add-more-wrapper">
                                <div class="form-item form-type-textfield form-item-field-dangky-ten-und-0-value">
                                    <label for="edit-field-dangky-ten-und-0-value">Tên cơ sở đăng ký công nhận <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>
                                    <input class="text-full form-text required" placeholder="
                                        Tên cơ sở đăng ký công nhận *" type="text" id="edit-field-dangky-ten-und-0-value" name="field_dangky_ten[und][0][value]" value="abc dè" size="60" maxlength="255">
                                </div>
                            </div>
                            </div>
                            <div class="field-type-text field-name-field-dangky-tencosotienganh field-widget-text-textfield form-wrapper" id="edit-field-dangky-tencosotienganh">
                            <div id="field-dangky-tencosotienganh-add-more-wrapper">
                                <div class="form-item form-type-textfield form-item-field-dangky-tencosotienganh-und-0-value">
                                    <label class="element-invisible" for="edit-field-dangky-tencosotienganh-und-0-value">Tên sơ sở đăng ký tiếng anh <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>
                                    <input class="text-full form-text required" placeholder="Tên cơ sở đăng ký tiếng anh" type="text" id="edit-field-dangky-tencosotienganh-und-0-value" name="field_dangky_tencosotienganh[und][0][value]" value="" size="60" maxlength="255">
                                </div>
                            </div>
                            </div>
                            <div class="field-type-taxonomy-term-reference field-name-field-dangky-loaidichvu field-widget-options-select form-wrapper" id="edit-field-dangky-loaidichvu">
                            <div class="form-item form-type-select form-item-field-dangky-loaidichvu-und">
                                <label for="edit-field-dangky-loaidichvu-und">Loại đăng ký </label>
                                <select id="edit-field-dangky-loaidichvu-und" name="field_dangky_loaidichvu[und]" class="form-select">
                                    <option value="_none">--- Chọn loại đăng ký ---</option>
                                    <option value="256">Phòng thí nghiệm</option>
                                    <option value="259">Phòng thí nghiệm y tế</option>
                                    <option value="258" selected="selected">Tổ chức chứng nhận</option>
                                    <option value="257">Tổ chức giám định</option>
                                </select>
                                <div class="description">*Vui lòng tải phụ lục bên dưới</div>
                            </div>
                            </div>
                            <div class="field-type-text field-name-field-dangky-diachithuchien field-widget-text-textfield form-wrapper" id="edit-field-dangky-diachithuchien">
                            <div id="field-dangky-diachithuchien-add-more-wrapper">
                                <div class="form-item form-type-textfield form-item-field-dangky-diachithuchien-und-0-value">
                                    <label class="element-invisible" for="edit-field-dangky-diachithuchien-und-0-value">Địa chỉ thực hiện hoạt động trong phạm vi đăng ký công nhận </label>
                                    <input class="text-full form-text" placeholder="Địa chỉ thực hiện hoạt động trong phạm vi đăng ký công nhận" type="text" id="edit-field-dangky-diachithuchien-und-0-value" name="field_dangky_diachithuchien[und][0][value]" value="" size="60" maxlength="255">
                                </div>
                            </div>
                            </div>
                            <div class="field-type-text field-name-field-dangky-teldiachihoatdong field-widget-text-textfield form-wrapper" id="edit-field-dangky-teldiachihoatdong">
                            <div id="field-dangky-teldiachihoatdong-add-more-wrapper">
                                <div class="form-item form-type-textfield form-item-field-dangky-teldiachihoatdong-und-0-value">
                                    <label class="element-invisible" for="edit-field-dangky-teldiachihoatdong-und-0-value">Tel </label>
                                    <input class="text-full form-text" placeholder="Tel" type="text" id="edit-field-dangky-teldiachihoatdong-und-0-value" name="field_dangky_teldiachihoatdong[und][0][value]" value="" size="60" maxlength="255">
                                </div>
                            </div>
                            </div>
                            <div class="field-type-text field-name-field-dangky-email field-widget-text-textfield form-wrapper" id="edit-field-dangky-email">
                            <div id="field-dangky-email-add-more-wrapper">
                                <div class="form-item form-type-textfield form-item-field-dangky-email-und-0-value">
                                    <label class="element-invisible" for="edit-field-dangky-email-und-0-value">Email <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>
                                    <input class="text-full form-text required" placeholder="Email" type="text" id="edit-field-dangky-email-und-0-value" name="field_dangky_email[und][0][value]" value="abc@gmail.com" size="60" maxlength="255">
                                </div>
                            </div>
                            </div>
                            <div class="field-type-text field-name-field-dangky-faxdiachihoatdong field-widget-text-textfield form-wrapper" id="edit-field-dangky-faxdiachihoatdong">
                            <div id="field-dangky-faxdiachihoatdong-add-more-wrapper">
                                <div class="form-item form-type-textfield form-item-field-dangky-faxdiachihoatdong-und-0-value">
                                    <label class="element-invisible" for="edit-field-dangky-faxdiachihoatdong-und-0-value">Fax </label>
                                    <input class="text-full form-text" placeholder="Fax" type="text" id="edit-field-dangky-faxdiachihoatdong-und-0-value" name="field_dangky_faxdiachihoatdong[und][0][value]" value="" size="60" maxlength="255">
                                </div>
                            </div>
                            </div>
                            <div class="field-type-text field-name-field-website field-widget-text-textfield form-wrapper" id="edit-field-website">
                            <div id="field-website-add-more-wrapper">
                                <div class="form-item form-type-textfield form-item-field-website-und-0-value">
                                    <label class="element-invisible" for="edit-field-website-und-0-value">Website </label>
                                    <input class="text-full form-text" placeholder="Website" type="text" id="edit-field-website-und-0-value" name="field_website[und][0][value]" value="" size="60" maxlength="255">
                                </div>
                            </div>
                            </div>
                            <div class="field-type-taxonomy-term-reference field-name-field-dangky-loaidanhgia field-widget-term-reference-tree form-wrapper" id="edit-field-dangky-loaidanhgia">
                            <div class="form-item form-type-checkbox-tree form-item-field-dangky-loaidanhgia-und">
                                <label for="edit-field-dangky-loaidanhgia-und">Loại hình đánh giá </label>
                                <div id="edit-field-dangky-loaidanhgia-und" class="term-reference-tree term-reference-tree-cascading-selection select-parents term-reference-tree-processed">
                                    <ul class="term-reference-tree-level ">
                                        <li>
                                        <div class="form-item form-type-checkbox form-item-field-dangky-loaidanhgia-und-0-260-260">
                                            <input class="select-parents form-checkbox" type="checkbox" id="edit-field-dangky-loaidanhgia-und-0-260-260" name="field_dangky_loaidanhgia[und][0][260][260]" value="260">  <label class="option" for="edit-field-dangky-loaidanhgia-und-0-260-260">Đánh giá ban đầu </label>
                                        </div>
                                        </li>
                                        <li>
                                        <div class="form-item form-type-checkbox form-item-field-dangky-loaidanhgia-und-0-261-261">
                                            <input class="select-parents form-checkbox" type="checkbox" id="edit-field-dangky-loaidanhgia-und-0-261-261" name="field_dangky_loaidanhgia[und][0][261][261]" value="261">  <label class="option" for="edit-field-dangky-loaidanhgia-und-0-261-261">Đánh giá lại </label>
                                        </div>
                                        </li>
                                        <li>
                                        <div class="form-item form-type-checkbox form-item-field-dangky-loaidanhgia-und-0-262-262">
                                            <input class="select-parents form-checkbox" type="checkbox" id="edit-field-dangky-loaidanhgia-und-0-262-262" name="field_dangky_loaidanhgia[und][0][262][262]" value="262">  <label class="option" for="edit-field-dangky-loaidanhgia-und-0-262-262">Đánh giá mở rộng </label>
                                        </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                            <div class="field-type-text field-name-field-dangky-maso field-widget-text-textfield form-wrapper" id="edit-field-dangky-maso" style="display: none;">
                            <div id="field-dangky-maso-add-more-wrapper">
                                <div class="form-item form-type-textfield form-item-field-dangky-maso-und-0-value">
                                    <label class="element-invisible" for="edit-field-dangky-maso-und-0-value">Mã số được công nhận </label>
                                    <input class="text-full form-text" placeholder="Mã" type="text" id="edit-field-dangky-maso-und-0-value" name="field_dangky_maso[und][0][value]" value="" size="60" maxlength="255">
                                </div>
                            </div>
                            </div>
                            <div class="field-type-text field-name-field-dangky-danhgiacongnhan field-widget-text-textfield form-wrapper" id="edit-field-dangky-danhgiacongnhan">
                            <div id="field-dangky-danhgiacongnhan-add-more-wrapper">
                                <div class="form-item form-type-textfield form-item-field-dangky-danhgiacongnhan-und-0-value">
                                    <label class="element-invisible" for="edit-field-dangky-danhgiacongnhan-und-0-value">Xin đánh giá công nhận theo: chuẩn mực   </label>
                                    <input class="text-full form-text" placeholder="Xin đánh giá công nhận theo: chuẩn mực  " type="text" id="edit-field-dangky-danhgiacongnhan-und-0-value" name="field_dangky_danhgiacongnhan[und][0][value]" value="" size="60" maxlength="255">
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="required-fields group-khugn2 field-group-div uk-width-1-1 uk-width-medium-1-2">
                            <div class="field-type-text field-name-field-dangky-coquanchuquan field-widget-text-textfield form-wrapper" id="edit-field-dangky-coquanchuquan">
                            <div id="field-dangky-coquanchuquan-add-more-wrapper">
                                <div class="form-item form-type-textfield form-item-field-dangky-coquanchuquan-und-0-value">
                                    <label class="element-invisible" for="edit-field-dangky-coquanchuquan-und-0-value">Cơ quan chủ quản tiếng việt </label>
                                    <input class="text-full form-text" placeholder="Cơ quan chủ quản tiếng việt" type="text" id="edit-field-dangky-coquanchuquan-und-0-value" name="field_dangky_coquanchuquan[und][0][value]" value="" size="60" maxlength="255">
                                </div>
                            </div>
                            </div>
                            <div class="field-type-text field-name-field-dangky-coquantienganh field-widget-text-textfield form-wrapper" id="edit-field-dangky-coquantienganh">
                            <div id="field-dangky-coquantienganh-add-more-wrapper">
                                <div class="form-item form-type-textfield form-item-field-dangky-coquantienganh-und-0-value">
                                    <label class="element-invisible" for="edit-field-dangky-coquantienganh-und-0-value">Cơ quan chủ quản tiếng anh </label>
                                    <input class="text-full form-text" placeholder="Cơ quan chủ quản tiếng anh" type="text" id="edit-field-dangky-coquantienganh-und-0-value" name="field_dangky_coquantienganh[und][0][value]" value="" size="60" maxlength="255">
                                </div>
                            </div>
                            </div>
                            <div class="field-type-text field-name-field-dangky-diachicoquanchuquan field-widget-text-textfield form-wrapper" id="edit-field-dangky-diachicoquanchuquan">
                            <div id="field-dangky-diachicoquanchuquan-add-more-wrapper">
                                <div class="form-item form-type-textfield form-item-field-dangky-diachicoquanchuquan-und-0-value">
                                    <label class="element-invisible" for="edit-field-dangky-diachicoquanchuquan-und-0-value">Địa chỉ </label>
                                    <input class="text-full form-text" placeholder="Địa chỉ" type="text" id="edit-field-dangky-diachicoquanchuquan-und-0-value" name="field_dangky_diachicoquanchuquan[und][0][value]" value="" size="60" maxlength="255">
                                </div>
                            </div>
                            </div>
                            <div class="field-type-text field-name-field-dangky-telcoquanchuqua field-widget-text-textfield form-wrapper" id="edit-field-dangky-telcoquanchuqua">
                            <div id="field-dangky-telcoquanchuqua-add-more-wrapper">
                                <div class="form-item form-type-textfield form-item-field-dangky-telcoquanchuqua-und-0-value">
                                    <label class="element-invisible" for="edit-field-dangky-telcoquanchuqua-und-0-value">Tel </label>
                                    <input class="text-full form-text" placeholder="Tel" type="text" id="edit-field-dangky-telcoquanchuqua-und-0-value" name="field_dangky_telcoquanchuqua[und][0][value]" value="" size="60" maxlength="255">
                                </div>
                            </div>
                            </div>
                            <div class="field-type-text field-name-field-fax field-widget-text-textfield form-wrapper" id="edit-field-fax">
                            <div id="field-fax-add-more-wrapper">
                                <div class="form-item form-type-textfield form-item-field-fax-und-0-value">
                                    <label class="element-invisible" for="edit-field-fax-und-0-value">Fax </label>
                                    <input class="text-full form-text" placeholder="Fax" type="text" id="edit-field-fax-und-0-value" name="field_fax[und][0][value]" value="" size="60" maxlength="255">
                                </div>
                            </div>
                            </div>
                            <div class="field-type-text field-name-field-dangky-websitecoquanchuqua field-widget-text-textfield form-wrapper" id="edit-field-dangky-websitecoquanchuqua">
                            <div id="field-dangky-websitecoquanchuqua-add-more-wrapper">
                                <div class="form-item form-type-textfield form-item-field-dangky-websitecoquanchuqua-und-0-value">
                                    <label class="element-invisible" for="edit-field-dangky-websitecoquanchuqua-und-0-value">Website </label>
                                    <input class="text-full form-text" placeholder="Website" type="text" id="edit-field-dangky-websitecoquanchuqua-und-0-value" name="field_dangky_websitecoquanchuqua[und][0][value]" value="" size="60" maxlength="255">
                                </div>
                            </div>
                            </div>
                            <div class="field-type-text field-name-field-dichvu-dienthoai field-widget-text-textfield form-wrapper" id="edit-field-dichvu-dienthoai">
                            <div id="field-dichvu-dienthoai-add-more-wrapper">
                                <div class="form-item form-type-textfield form-item-field-dichvu-dienthoai-und-0-value">
                                    <label for="edit-field-dichvu-dienthoai-und-0-value">Điện thoại </label>
                                    <input class="text-full form-text" type="text" id="edit-field-dichvu-dienthoai-und-0-value" name="field_dichvu_dienthoai[und][0][value]" value="24234324" size="60" maxlength="255">
                                </div>
                            </div>
                            </div>
                            <div class="field-type-list-boolean field-name-field-dangky-dauilac field-widget-options-buttons form-wrapper" id="edit-field-dangky-dauilac">
                            <div class="form-item form-type-checkboxes form-item-field-dangky-dauilac-und">
                                <label for="edit-field-dangky-dauilac-und">Sử dụng dấu ILAC MRA  </label>
                                <div id="edit-field-dangky-dauilac-und" class="form-checkboxes">
                                    <div class="form-item form-type-checkbox form-item-field-dangky-dauilac-und-0">
                                        <input type="checkbox" id="edit-field-dangky-dauilac-und-0" name="field_dangky_dauilac[und][0]" value="0" class="form-checkbox">  <label class="option" for="edit-field-dangky-dauilac-und-0">Không </label>
                                    </div>
                                    <div class="form-item form-type-checkbox form-item-field-dangky-dauilac-und-1">
                                        <input type="checkbox" id="edit-field-dangky-dauilac-und-1" name="field_dangky_dauilac[und][1]" value="1" class="form-checkbox">  <label class="option" for="edit-field-dangky-dauilac-und-1">Có  </label>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="field-type-text field-name-field-dangky-nguoiphutrach field-widget-text-textfield form-wrapper" id="edit-field-dangky-nguoiphutrach">
                            <div id="field-dangky-nguoiphutrach-add-more-wrapper">
                                <div class="form-item form-type-textfield form-item-field-dangky-nguoiphutrach-und-0-value">
                                    <label class="element-invisible" for="edit-field-dangky-nguoiphutrach-und-0-value">Họ tên chức trách người phụ trách </label>
                                    <input class="text-full form-text" placeholder="Họ tên, chức danh người phụ trách " type="text" id="edit-field-dangky-nguoiphutrach-und-0-value" name="field_dangky_nguoiphutrach[und][0][value]" value="" size="60" maxlength="255">
                                </div>
                            </div>
                            </div>
                            <div class="field-type-text field-name-field-dangky-telnguoiphutrach field-widget-text-textfield form-wrapper" id="edit-field-dangky-telnguoiphutrach">
                            <div id="field-dangky-telnguoiphutrach-add-more-wrapper">
                                <div class="form-item form-type-textfield form-item-field-dangky-telnguoiphutrach-und-0-value">
                                    <label class="element-invisible" for="edit-field-dangky-telnguoiphutrach-und-0-value">Tel </label>
                                    <input class="text-full form-text" placeholder="Tel" type="text" id="edit-field-dangky-telnguoiphutrach-und-0-value" name="field_dangky_telnguoiphutrach[und][0][value]" value="" size="60" maxlength="255">
                                </div>
                            </div>
                            </div>
                            <div class="field-type-text field-name-field-dangky-emailphutrach field-widget-text-textfield form-wrapper" id="edit-field-dangky-emailphutrach">
                            <div id="field-dangky-emailphutrach-add-more-wrapper">
                                <div class="form-item form-type-textfield form-item-field-dangky-emailphutrach-und-0-value">
                                    <label class="element-invisible" for="edit-field-dangky-emailphutrach-und-0-value">Email </label>
                                    <input class="text-full form-text" placeholder="Email" type="text" id="edit-field-dangky-emailphutrach-und-0-value" name="field_dangky_emailphutrach[und][0][value]" value="" size="60" maxlength="255">
                                </div>
                            </div>
                            </div>
                            <div class="field-type-text field-name-field-dangky-mobilenguoiphutrach field-widget-text-textfield form-wrapper" id="edit-field-dangky-mobilenguoiphutrach">
                            <div id="field-dangky-mobilenguoiphutrach-add-more-wrapper">
                                <div class="form-item form-type-textfield form-item-field-dangky-mobilenguoiphutrach-und-0-value">
                                    <label class="element-invisible" for="edit-field-dangky-mobilenguoiphutrach-und-0-value">Mobile </label>
                                    <input class="text-full form-text" placeholder="Mobile" type="text" id="edit-field-dangky-mobilenguoiphutrach-und-0-value" name="field_dangky_mobilenguoiphutrach[und][0][value]" value="" size="60" maxlength="255">
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="field-type-file field-name-field-dangky-filedinhkem field-widget-dragndrop-upload-file form-wrapper" id="edit-field-dangky-filedinhkem">
                        <div id="edit-field-dangky-filedinhkem-und-ajax-wrapper">
                            <fieldset id="edit-field-dangky-filedinhkem-und" class="form-wrapper">
                            <legend><span class="fieldset-legend">File đính kèm</span></legend>
                            <div class="fieldset-wrapper">
                                <div class="form-item form-type-dragndrop-upload form-item-field-dangky-filedinhkem-und-0">
                                    <label for="edit-field-dangky-filedinhkem-und-0-upload">Thêm file đính kèm </label>
                                    <div class="file-widget form-managed-file clearfix">
                                        <div class="droppable-standard-upload-hidden">
                                        <input multiple="multiple" type="file" id="edit-field-dangky-filedinhkem-und-0-upload" name="files[field_dangky_filedinhkem_und_0][]" size="22" class="form-file">
                                        </div>
                                        <div class="droppable dnd-upload-processed dnd-upload-element-processed dnd-upload-file-processed" id="droppable-field-dangky-filedinhkem-und-0">
                                        <div class="droppable-preview">
                                            <div class="droppable-preview-file">
                                                <div class="preview-remove">x</div>
                                                <div>
                                                    <span class="preview-filename"></span>
                                                    <span class="preview-filesize"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="droppable-message">
                                            <span>Kéo thả files vào đây để tải lên</span>
                                            <div class="droppable-standard-upload">
                                                <span>or</span>
                                                <a href="#" class="droppable-browse-button button">
                                                Duyệt qua      </a>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="droppable-controls">
                                        <input type="submit" id="edit-field-dangky-filedinhkem-und-0-upload-button" name="field_dangky_filedinhkem_und_0_upload_button" value="Upload" class="form-submit ajax-processed">
                                        </div>
                                        <input type="hidden" name="field_dangky_filedinhkem[und][0][_weight]" value="0">
                                        <input type="hidden" name="field_dangky_filedinhkem[und][0][fid]" value="0">
                                        <input type="hidden" name="field_dangky_filedinhkem[und][0][display]" value="1">
                                    </div>
                                    <div class="description">Kích thước của file phải nhỏ hơn <strong>3 MB</strong>.<br>Các định dạng cho phép: <strong>zip rar doc pdf docx xls</strong>.</div>
                                </div>
                            </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="field-type-markup field-name-field-markup field-widget-markup form-wrapper" id="edit-field-markup">
                        <div id="field-markup-add-more-wrapper">
                            <div id="bieumau_phongthinghiem" style="display: none;">
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>.<a href="http://www.boa.gov.vn/sites/default/files/ah8svvcg_af_11.01_application_form_0113.doc">Đơn đăng ký công nhận</a><br>	
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>.<a href="http://www.boa.gov.vn/sites/default/files/ah94kgjv_af_11.01_phu_luc_a_0316.doc">Phụ lục A - Danh mục phép thử đăng ký công nhận</a><br>
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>.<a href="http://www.boa.gov.vn/sites/default/files/ah94l691_af_11.01_phu_luc_b_0316.doc">Phụ lục B - Danh mục phép hiệu chuẩn đăng ký công nhận</a><br>
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>. <a href="http://www.boa.gov.vn/sites/default/files/ah94lgna_af_11.01_phu_luc_c.doc">Phụ lục C - Phạm vi hiệu chuẩn nội bộ</a><br>
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>. <a href="http://www.boa.gov.vn/sites/default/files/ah94llgf_af_11.01_phu_luc_d.doc">Phụ lục D - Thông tin bổ sung</a><br>
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>. <a href="http://www.boa.gov.vn/sites/default/files/ahitpa51_afl_01.01_phieutheodoithunghiemthanhthao2016">Phiếu theo dõi các chương trình thử nghiệm thành thạo</a><br>
                            <i class="uk-icon-floppy-o" title="tải xuống">. </i><a href="http://www.boa.gov.vn/sites/default/files/ahitpuou_afl_01.02_phieuhoi2016.doc">Phiếu hỏi</a><br>
                            </div>
                            <div id="bieumau_phonggiamdinh" style="display: none;">
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>.<a href="http://www.boa.gov.vn/sites/default/files/ah8svvcg_af_11.01_application_form_0113.doc">Đơn đăng ký công nhận</a><br>
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>. <a href="http://www.boa.gov.vn/sites/default/files/ah8t201d_af_11.01_phuluc_e_v6.14.pdf">Phụ lục E</a><br>
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>. <a href="http://www.boa.gov.vn/sites/default/files/ah9snmpo_afi_10.01_ver7.16_phieuhoi.pdf">Phiếu hỏi</a><br>
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>. <a href="http://www.boa.gov.vn/sites/default/files/ah9sni3r_e-afi_10_01_ver7.16_phieuhoi.pdf">Questionnaire</a><br>
                            </div>
                            <div id="bieumau_phongchungnhan" style="display: block;">
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>.<a href="http://www.boa.gov.vn/sites/default/files/ah8svvcg_af_11.01_application_form_0113.doc">Đơn đăng ký công nhận</a><br>
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>. <a href="http://www.boa.gov.vn/sites/default/files/agd73o5b_afc.01.01_annex_1_for_qms_.doc">Phụ lục 1 áp dụng cho QMS</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/agd745sm_afc.01.01_annex_2_for_ems.doc">Phụ lục 2 áp dụng cho EMS</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/agd74bfc_afc.01.01_annex_3_for_fsms.doc">Phụ lục 3 áp dụng cho FSMS</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/agd74g4r_afc.01.01_annex_4_for_pro.doc"> AFC.01.01: Phụ lục 4 áp dụng cho PRO</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/agd74kc6_afc.01.01_annex_5_for_per_.doc">AFC.01.01: Phụ lục 5 áp dụng cho PER</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/agd75le9_afc.01.02_checklist_17021-1-2015.doc">AFC.01.02: Phiếu hỏi 17021-1:2015</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/agd75s95_afc.01.02_checklist_17021-2-2012.doc"> AFC.01.02: Phiếu hỏi 17021-2:2012</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/agd761uo_afc.01.02_checklist_17021-3-2013.doc">AFC.01.02: Phiếu hỏi 17021-3:2013</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/agd76b9f_afc.01.02_checklist_17021-2011.doc">AFC.01.02: Phiếu hỏi 17021:2011</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/agd76q9s_afc.01.02_checklist_17065-2012.doc">AFC.01.02: Phiếu hỏi 17065:2012</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/agd7at7m_afc.01.02_checklist_22003-2007.doc">AFC.01.02: Phiếu hỏi 22003:2007</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/abvncegs_ag.01_phuluc2_-_thoathuansudungdau_iaf.doc">AG.01 Phụ lục 2: Thỏa thuận sử dụng dấu công nhận, dấu IAF MLA</a><br>
                            </div>
                            <div id="bieumau_phongyte" style="display: none;">
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>.<a href="http://www.boa.gov.vn/sites/default/files/ah8svvcg_af_11.01_application_form_0113.doc">Đơn đăng ký công nhận</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/ah8tveup_af_11.01_phu_luc_g_0316.doc">Phụ lục G - Danh mục chỉ tiêu xét nghiệm đăng ký công nhận</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/ah8u04lj_aflm_01.01_phieuhoi2010.pdf"> Phiếu hỏi </a>
                            </div>
                            <div id="bieumau_phongthinghiemta" style="display: none;">
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>.<a href="http://www.boa.gov.vn/sites/default/files/11NA20V7_AF 11.01 Application form 0113.doc"> AF11.01. Application Form</a><br>
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>.<a href="http://www.boa.gov.vn/sites/default/files/AH94KGJV_AF 11.01 Phu luc A 0316.doc">AF11.01. Appendix A</a><br>
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>.<a href="http://www.boa.gov.vn/sites/default/files/ah94l691_af_11.01_phu_luc_b_0316.doc">AF11.01. Appendix B</a><br>
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>. <a href="http://www.boa.gov.vn/sites/default/files/ah94lgna_af_11.01_phu_luc_c.doc">AF11.01. Appendix C</a><br>
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>. <a href="http://www.boa.gov.vn/sites/default/files/ah94llgf_af_11.01_phu_luc_d.doc">AF11.01. Appendix D</a><br>
                            <i class="uk-icon-floppy-o" title="tải xuống">. </i><a href="http://www.boa.gov.vn/sites/default/files/ahitpuou_afl_01.02_phieuhoi2016.doc">AFL01.01. Proficiency Testing Program</a><br>
                            <i class="uk-icon-floppy-o" title="tải xuống">. </i><a href="http://www.boa.gov.vn/sites/default/files/ahitpuou_afl_01.02_phieuhoi2016.doc">AFL01.02. Questionnaire</a><br>
                            </div>
                            <div id="bieumau_phonggiamdinhta" style="display: none;">
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>. <a href="http://www.boa.gov.vn/sites/default/files/AH94IAS2_AF 11.01 Application form 0113.doc">AF11.01. Application Form</a><br>
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>. <a href="http://www.boa.gov.vn/sites/default/files/11NA1VOG_AF 11.01 PhuLuc E v6.14.doc">AF11.01. Appendix E</a><br>
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>. <a href="http://www.boa.gov.vn/sites/default/files/AH9SNRHA_E-AFI 10 01_ver7.16 Phieuhoi.pdf">AFI10.01. Questionnaire</a><br>
                            </div>
                            <div id="bieumau_phongchungnhanta" style="display: none;">
                            <i class="uk-icon-floppy-o" title="tải xuống"></i>. <a href="http://www.boa.gov.vn/sites/default/files/AGD7DM7C_AFC.01.01 Application Form.doc">AFC.01.01: Application form</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/11KGNOV5_AFC.01.01 Annex 1 for QMS .doc">AFC.01.01: Annex 1 for QMS</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/AGD7DSH2_AFC.01.01 Annex 2 for EMS.doc">AFC.01.01: Annex 2 for EMS</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/AGD7DVCH_AFC.01.01 Annex 3 for FSMS.doc">AFC.01.01: Annex 3 for FSMS</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/AGD7E586_AFC.01.01 Annex 4 for PRO.doc">AFC.01.01: Annex 4 for PRO</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/AGD7E7U0_AFC.01.01 Annex 5 for PER .doc">AFC.01.01: Annex 5 for PER</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/ABVNCEGS_AG.01 PhuLuc2 - ThoaThuanSuDungDau IAF.doc">AG.01 Appendix 2: Agreement between BoA and CABs on using of IAF MLA mark</a><br>
                            </div>
                            <div id="bieumau_phongyteta" style="display: none;">
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/AH94O50H_AF 11.01 Application form 0113.doc"> AF11.01. Application Form</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/AH94O92Q_AF 11.01 Phu luc G 0316.doc"> AF11.01. Appendix G</a><br>
                            <i class="uk-icon-floppy-o"></i>. <a href="http://www.boa.gov.vn/sites/default/files/ah8u04lj_aflm_01.01_phieuhoi2010.pdf">AFLM01.01. Questionnaire</a>
                            </div>
                        </div>
                    </div>
                    <fieldset class="required-fields group-dangky-tinhtrang field-group-fieldset form-wrapper">
                        <legend><span class="fieldset-legend">Tình trạng đăng ký</span></legend>
                        <div class="fieldset-wrapper">
                            <div class="field-type-list-boolean field-name-field-dangky-hoantat field-widget-options-onoff form-wrapper" id="edit-field-dangky-hoantat">
                            <div class="form-item form-type-checkbox form-item-field-dangky-hoantat-und">
                                <input type="checkbox" id="edit-field-dangky-hoantat-und" name="field_dangky_hoantat[und]" value="1" class="form-checkbox">  <label class="option" for="edit-field-dangky-hoantat-und">Hoàn tất đăng ký </label>
                                <div class="description">
                                    <div class="boa-dk">
                                        <div> - Nếu không tích hoàn tất đăng ký: có link gửi vào email quý khách để chỉnh sửa hoàn thiện hồ sơ.</div>
                                        <div> - Nếu có tích chọn hoàn tất đăng ký: đăng ký của quý khách sẽ được gửi đến BoA.</div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="required-fields group-uk-hidden field-group-div uk-hidden">
                        <h3><span>uk-hidden</span></h3>
                        <div class="form-item form-type-select form-item-language">
                            <label for="edit-language">Ngôn ngữ </label>
                            <select id="edit-language" name="language" class="form-select">
                            <option value="vi" selected="selected">Tiếng Việt</option>
                            </select>
                        </div>
                    </div>
                    <fieldset class="captcha form-wrapper">
                        <legend><span class="fieldset-legend">CAPTCHA</span></legend>
                        <div class="fieldset-wrapper">
                            <div class="fieldset-description">Câu hỏi này dùng để kiểm tra xem bạn là người hay là chương trình tự động.</div>
                            <input type="hidden" name="captcha_sid" value="141728">
                            <input type="hidden" name="captcha_token" value="6baac8f716192f491ea91390dbee001a">
                            <input type="hidden" name="captcha_response" value="Google no captcha">
                            <div class="g-recaptcha" data-sitekey="6LcyZiIUAAAAAPG7NjSa25pLV5sIDHfsBL5vh3iv" data-theme="light" data-type="image">
                            <div style="width: 304px; height: 78px;">
                                <div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcyZiIUAAAAAPG7NjSa25pLV5sIDHfsBL5vh3iv&amp;co=aHR0cDovL3d3dy5ib2EuZ292LnZuOjgw&amp;hl=vi&amp;type=image&amp;v=v1562567553145&amp;theme=light&amp;size=normal&amp;cb=eiczyo3dlzou" width="304" height="78" role="presentation" name="a-srijc5koyraz" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div>
                                <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                            </div>
                            </div>
                        </div>
                    </fieldset>
                    <h2 class="element-invisible">Tab nằm dọc</h2>
                    <div class="vertical-tabs-panes vertical-tabs-processed"><input class="vertical-tabs-active-tab" type="hidden" name="additional_settings__active_tab" value=""></div>
                    <div class="form-actions form-wrapper" id="edit-actions"><input type="submit" id="edit-submit" name="op" value="Đăng ký" class="form-submit" data-uk-modal=""></div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
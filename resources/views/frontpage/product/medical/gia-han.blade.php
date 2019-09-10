@extends('layouts.app')
@section('content')
<div id="main-content">
   <div id="navigation">
      <div class="tabs-secondary clearfix">
         <ul class="tabs secondary"></ul>
      </div>
   </div>
   <div class="region region-content">
         <div id="block-system-main" class="block block-system">
            <div class="content">
               <div class="view view-danh-sach-dich-vu-1 view-id-danh_sach_dich_vu_1 view-display-id-page_9 view-dom-id-6dccd6cc169ae68866a098de7352f1d0">
                  <h1 class="uk-display-inline-block">Danh sách phòng y tế</h1>
                  <div class="view-filters" id="views-fieldset">
                     <form action="/" method="get" id="views-exposed-form-danh-sach-dich-vu-1-page-9" accept-charset="UTF-8">
                        <div>
                           <div class="views-exposed-form">
                              <div class="views-exposed-widgets clearfix">
                                 <div id="edit-combine-wrapper" class="views-exposed-widget views-widget-filter-combine">
                                    <label for="edit-combine">
                                    Từ khóa          </label>
                                    <div class="views-widget">
                                       <div class="form-item form-type-textfield form-item-combine">
                                          <input type="text" id="edit-combine" name="combine" value="" size="30" maxlength="128" class="form-text" placeholder="Từ khóa">
                                       </div>
                                    </div>
                                 </div>
                                 <div id="edit-field-dichvu-vias-value-wrapper" class="views-exposed-widget views-widget-filter-field_dichvu_vias_value">
                                    <label for="edit-field-dichvu-vias-value">
                                    Số VACILAS - MED          </label>
                                    <div class="views-widget">
                                       <div class="form-item form-type-textfield form-item-field-dichvu-vias-value">
                                          <input type="text" id="edit-field-dichvu-vias-value" name="field_dichvu_vias_value" value="" size="30" maxlength="128" class="form-text" placeholder="Số VACILAS - MED">
                                       </div>
                                    </div>
                                 </div>
                                 <div id="edit-title-wrapper" class="views-exposed-widget views-widget-filter-title">
                                    <label for="edit-title">
                                    Tên phòng thí nghiệm          </label>
                                    <div class="views-widget">
                                       <div class="form-item form-type-textfield form-item-title">
                                          <input type="text" id="edit-title" name="title" value="" size="30" maxlength="128" class="form-text" placeholder="Tên phòng">
                                       </div>
                                    </div>
                                 </div>
                                 <div id="edit-field-dichvu-chuquan-value-wrapper" class="views-exposed-widget views-widget-filter-field_dichvu_chuquan_value">
                                    <label for="edit-field-dichvu-chuquan-value">
                                    Đơn vị chủ quản          </label>
                                    <div class="views-widget">
                                       <div class="form-item form-type-textfield form-item-field-dichvu-chuquan-value">
                                          <input type="text" id="edit-field-dichvu-chuquan-value" name="field_dichvu_chuquan_value" value="" size="30" maxlength="128" class="form-text" placeholder="Đơn vị chủ quản">
                                       </div>
                                    </div>
                                 </div>
                                 <div id="edit-field-dichvu-khuvuc-tid-wrapper" class="views-exposed-widget views-widget-filter-field_dichvu_khuvuc_tid">
                                    <label for="edit-field-dichvu-khuvuc-tid">
                                    Tỉnh/Thành phố           </label>
                                    <div class="views-widget">
                                       <div class="form-item form-type-select form-item-field-dichvu-khuvuc-tid">
                                          <select id="edit-field-dichvu-khuvuc-tid" name="field_dichvu_khuvuc_tid" class="form-select">
                                             <option value="All" selected="selected">- Tất cả -</option>
                                             <option value="163">An Giang</option>
                                             <option value="161">Bà Rịa - Vũng Tàu</option>
                                             <option value="159">Bắc Cạn</option>
                                             <option value="157">Bắc Giang</option>
                                             <option value="155">Bạc Liêu</option>
                                             <option value="153">Bắc Ninh</option>
                                             <option value="143">Bình Thuận</option>
                                             <option value="149">Bến Tre</option>
                                             <option value="139">Buôn Mê Thuột</option>
                                             <option value="141">Bình Định</option>
                                             <option value="111">Jakarta - Indonesia</option>
                                             <option value="145">Bình Phước</option>
                                             <option value="137">Cà Mau</option>
                                             <option value="135">Cần Thơ</option>
                                             <option value="133">Cao Bằng</option>
                                             <option value="147">Bình Dương</option>
                                             <option value="151">Batam Site - Indonesia</option>
                                             <option value="131">Gia Lai</option>
                                             <option value="129">Hà Giang</option>
                                             <option value="127">Hà Nam</option>
                                             <option value="125">Hà Nội</option>
                                             <option value="121">Hải Dương</option>
                                             <option value="123">Hà Tĩnh</option>
                                             <option value="117">Hậu Giang</option>
                                             <option value="119">Hải Phòng</option>
                                             <option value="115">Hòa Bình</option>
                                             <option value="113">Hưng Yên</option>
                                             <option value="109">Khánh Hòa</option>
                                             <option value="107">Kiên Giang</option>
                                             <option value="105">Kon Tum</option>
                                             <option value="103">Lai Châu</option>
                                             <option value="101">Lâm Đồng</option>
                                             <option value="99">Lạng Sơn</option>
                                             <option value="97">Lào Cai</option>
                                             <option value="95">Long An</option>
                                             <option value="93">Nam Định</option>
                                             <option value="91">Negara Brunei Darussalam</option>
                                             <option value="89">Nghệ An</option>
                                             <option value="85">Ninh Bình</option>
                                             <option value="83">Ninh Thuận</option>
                                             <option value="81">Phnom Penh - Cambodia</option>
                                             <option value="79">Phú Thọ</option>
                                             <option value="77">Phú Yên</option>
                                             <option value="75">Quảng Bình</option>
                                             <option value="73">Quảng Nam</option>
                                             <option value="71">Quảng Ngãi</option>
                                             <option value="69">Quảng Ninh</option>
                                             <option value="67">Quảng Trị</option>
                                             <option value="65">Sóc Trăng</option>
                                             <option value="63">Sơn La</option>
                                             <option value="61">T.Champasak - Lào</option>
                                             <option value="59">Tây Ninh</option>
                                             <option value="57">Thái Bình</option>
                                             <option value="55">Thái Nguyên</option>
                                             <option value="53">Thanh Hóa</option>
                                             <option value="51">Thừa Thiên Huế</option>
                                             <option value="49">Tiền Giang</option>
                                             <option value="47">TP Hồ Chí Minh</option>
                                             <option value="45">Trà Vinh</option>
                                             <option value="43">Tuyên Quang</option>
                                             <option value="41">Vĩnh Long</option>
                                             <option value="39">Vĩnh Phúc</option>
                                             <option value="37">Yên Bái</option>
                                             <option value="35">Đà Lạt</option>
                                             <option value="33">Đà Nẵng</option>
                                             <option value="31">Đắc Lắc</option>
                                             <option value="29">Đắc Nông</option>
                                             <option value="27">Điện Biên</option>
                                             <option value="25">Đồng Nai</option>
                                             <option value="23">Đồng Tháp</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="edit-field-dichvu-tinhtrang-tid-1-wrapper" class="views-exposed-widget views-widget-filter-field_dichvu_tinhtrang_tid_1">
                                    <label for="edit-field-dichvu-tinhtrang-tid-1">
                                    Tình trạng          </label>
                                    <div class="views-widget">
                                       <div class="form-item form-type-select form-item-field-dichvu-tinhtrang-tid-1">
                                          <select id="edit-field-dichvu-tinhtrang-tid-1" name="field_dichvu_tinhtrang_tid_1" class="form-select">
                                             <option value="All" selected="selected">- Tất cả -</option>
                                             <option value="292">Hiệu lực</option>
                                             <option value="275">Gia hạn</option>
                                             <option value="277">Hủy bỏ</option>
                                             <option value="295">-Hủy bỏ tự nguyện</option>
                                             <option value="296">-Hủy bỏ bởi BOA</option>
                                             <option value="276">Đình chỉ</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="views-exposed-widget views-submit-button">
                                    <input type="submit" id="edit-submit-danh-sach-dich-vu-1" name="" value="Tìm kiếm" class="form-submit">    
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="view-empty">
                     <h3 class="uk-text-center uk-text-danger" style="margin-top: 10px"><i class="uk-icon-spin uk-icon-refresh"></i> Chưa có dữ liệu !</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>
@include('frontpage.sidebar-right');
@endsection
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
            <div class="view view-danh-sach-dich-vu-1 view-id-danh_sach_dich_vu_1 view-display-id-page_2 view-dom-id-022b05a9d049ad1ede4ac9b5b7cfe8cb">
               <h1 class="uk-display-inline-block">Tìm kiếm tổ chức giám định</h1>
               <div class="view-filters" id="views-fieldset">
                  <form action="/vi/tim-kiem-thi-nghiem" method="get" id="views-exposed-form-danh-sach-dich-vu-1-page-2" accept-charset="UTF-8">
                     <div>
                        <div class="views-exposed-form">
                           <div class="views-exposed-widgets clearfix">
                              <div id="edit-combine-wrapper" class="views-exposed-widget views-widget-filter-combine">
                                 <label for="edit-combine"> Từ khóa  </label>
                                 <div class="views-widget">
                                    <div class="form-item form-type-textfield form-item-combine">
                                       <input type="text" id="edit-combine" name="combine" value="" size="30" maxlength="128" class="form-text" placeholder="Từ khóa">
                                    </div>
                                 </div>
                              </div>
                              <div id="edit-field-dichvu-vilas-value-wrapper" class="views-exposed-widget views-widget-filter-field_dichvu_vilas_value">
                                 <label for="edit-field-dichvu-vilas-value">
                                 Số VILAS          </label>
                                 <div class="views-widget">
                                    <div class="form-item form-type-textfield form-item-field-dichvu-vilas-value">
                                       <input type="text" id="edit-field-dichvu-vilas-value" name="field_dichvu_vilas_value" value="" size="30" maxlength="128" class="form-text" placeholder="Số VILAS">
                                    </div>
                                 </div>
                              </div>
                              <div id="edit-title-wrapper" class="views-exposed-widget views-widget-filter-title">
                                 <label for="edit-title">Tên phòng thí nghiệm </label>
                                 <div class="views-widget">
                                    <div class="form-item form-type-textfield form-item-title">
                                       <input type="text" id="edit-title" name="title" value="" size="30" maxlength="128" class="form-text" placeholder="Tên phòng thí nghiệm">
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
                                    Tỉnh/Thành phố          
                                 </label>
                                 <div class="views-widget">
                                    <div class="form-item form-type-select form-item-field-dichvu-khuvuc-tid">
                                       <select multiple="multiple" name="field_dichvu_khuvuc_tid[]" id="edit-field-dichvu-khuvuc-tid" size="9" class="form-select ui-multiselect-processed" style="display: none;">
                                          <option value="" disabled selected>Tỉnh/Tp</option>
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
                                       {{-- <button type="button" class="ui-multiselect ui-widget ui-state-default ui-corner-all" aria-haspopup="true" style="width: 225px;"><span class="ui-icon ui-icon-triangle-1-s" style="padding-left: 4px; color: rgb(118, 118, 118);">Tỉnh/Tp</span><span style="padding-left: 4px; color: rgb(118, 118, 118);">Tỉnh/Tp</span></button> --}}
                                    </div>
                                 </div>
                              </div>
                              <div id="edit-field-dichvu-linhvuc-tid-wrapper" class="views-exposed-widget views-widget-filter-field_dichvu_linhvuc_tid">
                                 <label for="edit-field-dichvu-linhvuc-tid"> Lĩnh vực (field_dichvu_linhvuc) </label>
                                 <div class="views-widget">
                                    <div class="form-item form-type-select form-item-field-dichvu-linhvuc-tid">
                                       <select multiple="multiple" name="field_dichvu_linhvuc_tid[]" id="edit-field-dichvu-linhvuc-tid" size="8" class="form-select ui-multiselect-processed" style="display: none;">
                                          <option value="" disabled selected>Lĩnh vực</option>
                                          <option value="co">-Cơ</option>
                                          <option value="duoc">-Dược</option>
                                          <option value="dien">-Điện – Điện tử</option>
                                          <option value="do luong">-Đo lường – hiệu chuẩn</option>
                                          <option value="hoa">-Hóa</option>
                                          <option value="khong pha huy">-Không phá hủy</option>
                                          <option value="sinh">-Sinh</option>
                                          <option value="vat lieu xay dung">-Vật liệu xây dựng</option>
                                       </select>
                                       {{-- <button type="button" class="ui-multiselect ui-widget ui-state-default ui-corner-all" aria-haspopup="true" style="width: 225px;"><span class="ui-icon ui-icon-triangle-1-s" style="padding-left: 4px; color: rgb(118, 118, 118);">Lĩnh vực</span><span style="padding-left: 4px; color: rgb(118, 118, 118);">Lĩnh vực</span></button> --}}
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
               <div class="view-header">
               <button class="uk-button uk-button-primary">Tổng số kết quả: {{ $count }}</button>    
               </div>
               <div class="view-content ">
                  <table class="views-table cols-6" data-view-name="danh_sach_dich_vu_1" data-view-display="page_2">
                     <thead>
                        <tr>
                           <th class="views-field views-field-field-dichvu-vilas">
                              <a href="/vi/tim-kiem-thi-nghiem?field_dichvu_vilas_value=&amp;title=&amp;field_dichvu_chuquan_value=&amp;&amp;&amp;combine=&amp;order=field_dichvu_vilas&amp;sort=asc" title="sắp xếp theo Số VILAS" class="active">Số VILAS</a>          
                           </th>
                           <th class="views-field views-field-megarow-links">
                              Tên phòng thí nghiệm          
                           </th>
                           <th class="views-field views-field-field-dichvu-chuquan">
                              Đơn vị chủ quản          
                           </th>
                           <th class="views-field views-field-field-dichvu-linhvuc">
                              Lĩnh vực          
                           </th>
                           <th class="views-field views-field-field-dichvu-khuvuc">
                              Tỉnh,TP          
                           </th>
                           <th class="views-field views-field-field-dichvu-diadiem">
                              Địa điểm công nhận          
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        @isset($dataProducts)
                           @foreach ($dataProducts as $item)
                              <?php $i = $item->data_product_descriptions()->first(); ?>
                              <tr class="odd views-row-first item-15017" data-entity-id="15017">
                                 <td class="views-field views-field-field-dichvu-vilas">
                                    {{ $i->vacis }}        
                                 </td>
                                 <td class="views-field views-field-megarow-links">
                                    <i class="uk-icon-plus-square-o"></i> 
                                    {{-- <a href="/vi/display_megarow/15017/baiviet/15017" class="views-megarow-open views-megarow-open-processed">{{  }}</a>           --}}
                                    {{ $i->name }}
                                 </td>
                                 <td class="views-field views-field-field-dichvu-chuquan">
                                    {{ $i->organization }}          
                                 </td>
                                 <td class="views-field views-field-field-dichvu-linhvuc">
                                       {{ $i->field }}          
                                 </td>
                                 <td class="views-field views-field-field-dichvu-khuvuc">
                                       {{ $i->city }}           
                                 </td>
                                 <td class="views-field views-field-field-dichvu-diadiem">
                                    {{ $i->place }}         
                                 </td>
                              </tr>
                           @endforeach
                        @endisset
                     </tbody>
                  </table>
               </div>
               <h2 class="element-invisible">Trang</h2>
               <div class="item-list">
                  <ul class="pager">
                     <li class="pager-current first">1</li>
                     {{-- <li class="pager-item"><a title="Đến trang 2" href="/vi/tim-kiem-thi-nghiem?field_dichvu_vilas_value=&amp;title=&amp;field_dichvu_chuquan_value=&amp;&amp;&amp;combine=&amp;page=1">2</a></li> --}}
                     <li class="pager-ellipsis">…</li>
                     <li class="pager-next"><a title="Đến trang sau" href="">sau ›</a></li>
                     <li class="pager-last last"><a title="Đến trang cuối cùng" href="">cuối »</a></li>
                  </ul>
               </div>
            </div> 
         </div>
      </div>
   </div>
</div>
@include('frontpage.sidebar-right');
@endsection
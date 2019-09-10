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
          <div class="view view-danh-sach-dich-vu-1 view-id-danh_sach_dich_vu_1 view-display-id-page_6 view-dom-id-51e9f40f82b11150a8a6980957d111c8">
             <h1 class="uk-display-inline-block">Danh sách phòng thí nghiệm</h1>
             <div class="view-filters" id="views-fieldset">
                <form action="/" method="get" id="views-exposed-form-danh-sach-dich-vu-1-page-6" accept-charset="UTF-8">
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
                            <div id="edit-field-dichvu-vilas-value-wrapper" class="views-exposed-widget views-widget-filter-field_dichvu_vilas_value">
                               <label for="edit-field-dichvu-vilas-value">
                               Số VACILAS          </label>
                               <div class="views-widget">
                                  <div class="form-item form-type-textfield form-item-field-dichvu-vilas-value">
                                     <input type="text" id="edit-field-dichvu-vilas-value" name="field_dichvu_vilas_value" value="" size="30" maxlength="128" class="form-text" placeholder="Số VACILAS">
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
             <div class="view-header">
                <button class="uk-button uk-button-primary">Tổng số kết quả: 0</button>    
             </div>
             <div class="view-content ">
                <table class="views-table cols-6">
                   <caption>Tình trạng: Đình chỉ</caption>
                   <thead>
                      <tr>
                         <th class="views-field views-field-field-dichvu-vilas">
                            Số VACILAS
                         </th>
                         <th class="views-field views-field-title">
                            Tên phòng
                         </th>
                         <th class="views-field views-field-field-dichvu-chuquan">
                            Đơn vị chủ quản          
                         </th>
                         <th class="views-field views-field-field-dichvu-ngayhieuluc">
                            Ngày hiệu lực          
                         </th>
                         <th class="views-field views-field-field-dichvu-thoigianhuy">
                            Thời gian hủy          
                         </th>
                         <th class="views-field views-field-field-dichvu-tinhtrang">
                            Tình trạng          
                         </th>
                      </tr>
                   </thead>
                   <tbody>
                    <tr>
                        <td colspan="6" style="text-align: center"> Không có dữ liệu</td>
                    </tr>
                 </tbody>
                </table>
                <table class="views-table cols-6">
                   <caption>Tình trạng: Hủy bỏ</caption>
                   <thead>
                      <tr>
                         <th class="views-field views-field-field-dichvu-vilas">
                            Số VACILAS
                         </th>
                         <th class="views-field views-field-title">
                            Tên phòng
                         </th>
                         <th class="views-field views-field-field-dichvu-chuquan">
                            Đơn vị chủ quản          
                         </th>
                         <th class="views-field views-field-field-dichvu-ngayhieuluc">
                            Ngày hiệu lực          
                         </th>
                         <th class="views-field views-field-field-dichvu-thoigianhuy">
                            Thời gian hủy          
                         </th>
                         <th class="views-field views-field-field-dichvu-tinhtrang">
                            Tình trạng          
                         </th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr>
                        <td colspan="6" style="text-align: center"> Không có dữ liệu</td>
                      </tr>
                   </tbody>
                </table>
             </div>
          </div>
       </div>
    </div>
 </div>
</div>
@include('frontpage.sidebar-right');
@endsection
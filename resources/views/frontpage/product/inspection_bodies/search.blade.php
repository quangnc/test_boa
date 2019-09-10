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
               <div class="view view-danh-sach-dich-vu-1 view-id-danh_sach_dich_vu_1 view-display-id-page_7 view-dom-id-2dded061f526b0dbb61a32e703be7a31">
                  <h1 class="uk-display-inline-block">Danh sách phòng giám định</h1>
                  <div class="view-filters" id="views-fieldset">
                     <form action="/vi/ds-giam-dinh" method="get" id="views-exposed-form-danh-sach-dich-vu-1-page-7" accept-charset="UTF-8">
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
                                    Số VACIAS          </label>
                                    <div class="views-widget">
                                       <div class="form-item form-type-textfield form-item-field-dichvu-vias-value">
                                          <input type="text" id="edit-field-dichvu-vias-value" name="field_dichvu_vias_value" value="" size="30" maxlength="128" class="form-text" placeholder="Số VACIAS">
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
                  <div class="view-empty">
                     <h3 class="uk-text-center uk-text-danger" style="margin-top: 10px"><i class="uk-icon-spin uk-icon-refresh"></i> Chưa có dữ liệu !</h3>
                  </div>
               </div>
               <script type="text/javascript">
                  document.getElementsByTagName('body')[0].className+=' page-views';
                  if(document.getElementById('page-title')){
                  document.getElementById('page-title').style.display = 'none';
                  }
               </script>  
            </div>
         </div>
      </div>
</div>
@include('frontpage.sidebar-right');
@endsection
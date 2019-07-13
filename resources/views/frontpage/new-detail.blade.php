@extends('layouts.app')

@section('content')

<div id="content-wrapper">
        <div id="sidebar-left">
           <div class="region region-sidebar-left">
               @include('frontpage.category')
               @include('frontpage.registration')
           </div>
        </div>
        <div id="main-content">
           <h1 class="title" id="page-title" style="display: none;">
              Giới thiệu chung			
           </h1>
           <div id="navigation">
              <div class="tabs-secondary clearfix">
                 <ul class="tabs secondary"></ul>
              </div>
           </div>
           <div class="region region-content">
              <div id="block-system-main" class="block block-system">
                 <div class="content">
                    <div id="node-11966" class="node node-tintuc clearfix">
                       <div class="content">
                          <div class="group-khung field-group-div ">
                             <div class="field field-name-field-noidung field-type-text-long field-label-hidden">
                                <div class="field-items">
                                   <div class="field-item even">
                                      <div class="rtecenter"><br>
                                         <span style="font-size:18px;"><strong>VÀI NÉT SƠ LƯỢC</strong></span><br>
                                         &nbsp;
                                      </div>
                                      <ol>
                                         <li class="rtejustify"><span style="font-size:14px;">​Thành lập năm 1995 thuộc <strong>Tổng cục Tiêu chuẩn – Đo lường – Chất lượng (STAMEQ)</strong>. Đến tháng 7/2009, Văn phòng Công nhận Chất lượng trực thuộc Bộ Khoa học và Công nghệ theo quyết định số 1101/QĐ-TTg ngày 23 tháng 7 năm 2009 về các tổ chức sự nghiệp trực thuộc Bộ Khoa học và Công nghệ.</span></li>
                                         <li class="rtejustify">Thực hiện các hoạt động công nhận cho <strong>phòng thí nghiệm, phòng hiệu chuẩn, phòng thí nghiệm y tế, phòng thí nghiệm an toàn sinh học, tổ chức chứng nhận, tổ chức giám định và các tổ chức đánh giá sự phù hợp khác.</strong></li>
                                         <li class="rtejustify">Tham gia hoạt động tại các Tổ chức Công nhận quốc tế và khu vực như Tổ chức công nhận các phòng thí nghiệm Châu Á – Thái Bình Dương (APLAC), Tổ chức Công nhận các phòng thí nghiệm quốc tế (ILAC) và Tổ chức Công nhận Châu Á – Thái Bình Dương (PAC), Diễn đàn công nhận quốc tế (IAF).</li>
                                         <li class="rtejustify"><span style="font-size:14px;">Thành viên ký thỏa ước thừa nhận lẫn nhau MRA của APLAC và ILAC cho chương trình Công nhận phòng thí nghiệm (VILAS), Tổ chức giám định (VIAS) và Phòng thí nghiệm y tế (VILAS-MED).​</span></li>
                                         <li class="rtejustify">Thành viên ký thỏa ước thừa nhận lẫn nhau MLA của PAC và IAF cho chương trình công nhận Tổ chức chứng nhận (VICAS) cho phạm vi chứng nhận hệ thống quản lý chất lượng (QMS), hệ thống quản lý môi trường (EMS), hệ thống quản lý an toàn thực phẩm (FSMS), sản phẩm (PRODUCT).</li>
                                         <li class="rtejustify"><span style="font-size:14px;">Đã công nhận cho gần 1000 Phòng thí nghiệm, Phòng thí nghiệm Y tế, Tổ chức giám định, Tổ chức chứng nhận.</span></li>
                                      </ol>
                                   </div>
                                </div>
                             </div>
                             <div class="group-tintuckhung1 field-group-div uk-width-1-1 uk-width-medium-3-4">
                                <div class="field field-name-field-tintuc-gallery field-type-markup field-label-hidden">
                                   <div class="field-items">
                                      <div class="field-item even"></div>
                                   </div>
                                </div>
                                <div class="field field-name-field-chiase field-type-markup field-label-hidden">
                                   <div class="field-items">
                                      <div class="field-item even">
                                         <div style="float:right; margin-left: 5px;">
                                            <div class="g-plusone" data-size="medium" data-annotation="none"></div>
                                         </div>
                                         <div class="fb-like" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" style="float:right;"></div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div id="block-views-tin-tuc-khac-block" class="block block-views">
                 <h2>Tin tức khác</h2>
                 <div class="content">
                    <div class="view view-tin-tuc-khac view-id-tin_tuc_khac view-display-id-block  -small view-dom-id-9722ebad8be42562fd169630a4f0f88a">
                       <div class="view-content uk-grid uk-grid-small">
                          <div class="item-list">
                             <ul>
                                <li class="views-row views-row-1 views-row-odd views-row-first views-row-last">
                                   <div class="views-field views-field-title">        <span class="field-content"><a href="/vi/chuc-nang-va-nhiem-vu">CHỨC NĂNG VÀ NHIỆM VỤ</a></span>  </div>
                                   <div class="views-field views-field-created">        <span class="field-content"><span>( 15/06/2016 )</span></span>  </div>
                                </li>
                             </ul>
                          </div>
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
        <div id="sidebar-right">
           <div class="region region-sidebar-right">
              @include('frontpage.news')
              @include('frontpage.tranning-new')
           </div>
        </div>
     </div>
@endsection
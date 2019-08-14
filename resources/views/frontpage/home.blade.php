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
          </div>
       </div>
       <div id="block-block-6" class="block block-block">
          <div class="content">
             <div class="uk-grid">
                <div class="uk-width-1-1">
                   <div class="">
                      <div id="block-block-3" class="block block-block">
                         <div class="content">
                            <div class="uk-slidenav-position" data-uk-slideshow="{animation:'random-fx', autoplay:true,autoplayInterval:'5000'}">
                               <ul class="uk-slideshow">
                                    @isset($slides)
                                    @foreach($slides as $slide)
                                        <li>
                                            <img src="{{ asset('upload').'/'.$slide->image }}" alt=" {{ $slide->title }}"/>
                                            <div class="slide-title uk-text-left"></div>
                                        </li>
                                    @endforeach
                                    @endisset
                               </ul>
                               <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a><a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                               <ul class="uk-dotnav uk-dotnav-contrast uk-position-top uk-flex-right">
                                  <li data-uk-slideshow-item="0"><a href="#"></a></li>
                                  <li data-uk-slideshow-item="1"><a href="#"></a></li>
                                  <li data-uk-slideshow-item="2"><a href="#"></a></li>
                               </ul>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="">
                      <div class=" uk-width-medium-3-4" style="float: left">
                         <div id="block-block-7" class="block block-block">
                            <h2>Các phòng dịch vụ</h2>
                            <div class="content">
                               <div class="uk-grid">
                                  <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-2">
                                     <div class="thinghiem">
                                        <div class="tieude_dichvu">Công nhận năng lực phòng thí nghiệm</div>
                                        <div id="block-menu-menu-menu-phong-thi-nghiem" class="block block-menu">
                                           <h2>Danh mục</h2>
                                           <div class="content">
                                              <ul class="menu">
                                                <li class="first leaf"><a href="{{ route('laboratories-introduction') }}" title="">Giới thiệu</a></li>
                                                <li class="leaf"><a href="{{ route('laboratories-search') }}" title="">Tìm kiếm</a></li>
                                                <li class="leaf"><a href="{{ route('laboratories-application') }}" title="">Biểu mẫu</a></li>
                                                <li class="leaf"><a href="{{ route('laboratories-document') }}" title="">Tài liệu</a></li>
                                                <li class="last leaf"><a href="vi/thi-nghiem.html" title="">Gia hạn, đình chỉ, hủy bỏ</a></li>
                                              </ul>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="uk-width-1-1 uk-width-small-1-2  uk-width-medium-1-2">
                                    <div class="yte">
                                       <div class="tieude_dichvu">Công nhận năng lực phòng thí nghiệm y tế</div>
                                       <div id="block-menu-menu-menu-phong-thi-nghiem-y-te" class="block block-menu">
                                          <h2>Danh mục</h2>
                                          <div class="content">
                                             <ul class="menu">
                                                <li class="first leaf"><a href="{{ route('medical-introduction') }}" title="">Giới thiệu</a></li>
                                                <li class="leaf"><a href="{{ route('medical-search') }}" title="">Tìm kiếm</a></li>
                                                <li class="leaf"><a href="{{ route('medical-application') }}" title="">Biểu mẫu</a></li>
                                                <li class="leaf"><a href="{{ route('medical-document') }}" title="">Tài liệu</a></li>
                                                <li class="last leaf"><a href="vi/y-te.html" title="">Gia hạn, đình chỉ, hủy bỏ</a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                  </div>
                               </div>
                               <div class="uk-grid ">
                                  <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-2">
                                     <div class="giamdinh">
                                        <div class="tieude_dichvu">Công nhận năng lực tổ chức giám định</div>
                                        <div id="block-menu-menu-menu-to-chuc-giam-dinh" class="block block-menu">
                                           <h2>Danh mục</h2>
                                           <div class="content">
                                              <ul class="menu">
                                                   <li class="first leaf"><a href="{{ route('inspectionBodies-introduction') }}" title="">Giới thiệu</a></li>
                                                   <li class="leaf"><a href="{{ route('inspectionBodies-search') }}" title="">Tìm kiếm</a></li>
                                                   <li class="leaf"><a href="{{ route('inspectionBodies-application') }}" title="">Biểu mẫu</a></li>
                                                   <li class="leaf"><a href="{{ route('inspectionBodies-document') }}" title="">Tài liệu</a></li>
                                                 <li class="last leaf"><a href="vi/ds-giam-dinh.html" title="">Gia hạn, đình chỉ, hủy bỏ</a></li>
                                              </ul>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-2">
                                        <div class="chungnhan">
                                              <div class="tieude_dichvu">Công nhận năng lực tổ chức chứng nhận</div>
                                              <div id="block-menu-menu-menu-to-chuc-chung-nhan" class="block block-menu">
                                                 <h2>Danh mục</h2>
                                                 <div class="content">
                                                    <ul class="menu">
                                                         <li class="first leaf"><a href="{{ route('certification-introduction') }}" title="">Giới thiệu</a></li>
                                                         <li class="leaf"><a href="{{ route('certification-search') }}" title="">Tìm kiếm</a></li>
                                                         <li class="leaf"><a href="{{ route('certification-application') }}" title="">Biểu mẫu</a></li>
                                                         <li class="leaf"><a href="{{ route('certification-document') }}" title="">Tài liệu</a></li>
                                                       <li class="last leaf"><a href="vi/chung-nhan.html" title="">Gia hạn, đình chỉ, hủy bỏ</a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                           </div>
                                     
                                  </div>
                               </div>
                               <div class="uk-grid">
                               <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-2">
                                  <div class="giamdinh">
                                     <div class="tieude_dichvu">Công nhận năng lực tổ chức</div>
                                     <div id="block-menu-menu-menu-to-chuc-giam-dinh" class="block block-menu">
                                        <h2>Danh mục</h2>
                                        <div class="content">
                                           <ul class="menu">
                                                <li class="first leaf"><a href="{{ route('laboratories-introduction') }}" title="">Giới thiệu</a></li>
                                                <li class="leaf"><a href="{{ route('laboratories-search') }}" title="">Tìm kiếm</a></li>
                                                <li class="leaf"><a href="{{ route('laboratories-application') }}" title="">Biểu mẫu</a></li>
                                                <li class="leaf"><a href="{{ route('laboratories-document') }}" title="">Tài liệu</a></li>
                                              <li class="last leaf"><a href="vi/ds-giam-dinh.html" title="">Gia hạn, đình chỉ, hủy bỏ</a></li>
                                           </ul>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-2">
                                  <div class="yte">
                                     <div class="tieude_dichvu">Công nhận năng lực khác</div>
                                     <div id="block-menu-menu-menu-phong-thi-nghiem-y-te" class="block block-menu">
                                        <h2>Danh mục</h2>
                                        <div class="content">
                                           <ul class="menu">
                                                <li class="first leaf"><a href="{{ route('laboratories-introduction') }}" title="">Giới thiệu</a></li>
                                                <li class="leaf"><a href="{{ route('laboratories-search') }}" title="">Tìm kiếm</a></li>
                                                <li class="leaf"><a href="{{ route('laboratories-application') }}" title="">Biểu mẫu</a></li>
                                                <li class="leaf"><a href="{{ route('laboratories-document') }}" title="">Tài liệu</a></li>
                                              <li class="last leaf"><a href="vi/y-te.html" title="">Gia hạn, đình chỉ, hủy bỏ</a></li>
                                           </ul>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            </div>
                         </div>
                      </div>
                      <div class=" uk-width-medium-1-4" id="block-block-7" style="float: right; padding-left: 35px;     margin-bottom: 5px;">
                      <div class="">
                            <div id="block-views-tin-dao-tao-home-block" class="block block-views" style="margin-top: 0px">
                               <div class="content">
                                  <div class="view view-tin-dao-tao-home view-id-tin_dao_tao_home view-display-id-block view-dom-id-b3c03dd065dc8491d944f89159894e2e">
                                     <div class="view-header">
                                        <div class="tindaotao">Hỗ trợ khách hàng</div>
                                     </div>
                                     <div class="view-content ">
                                        <h2 class="hotline"><span>Hotline:</span> {{ $setting['phone'] }}</h2>
                                        <p class="ht">
                                           <img src="{{ asset('interface/pageHome/images/ic-mail.png') }}">
                                           <span>{{ $setting['email'] }}</span>
                                        </p>
                                        <p class="ht">
                                           <img src="{{ asset('interface/pageHome/images/ic-sk.png') }}">
                                           <span><a href="skype:Viện chất lượng?chat" style="color:#1978bb">Viện chất lượng</a></span>
                                        </p>
                                        <ul class="list-ht">
                                          @isset($supports)
                                          @foreach ($supports as $item)
                                          <?php $support_desc = $item->support_descriptions()->first(); ?>
                                             <li>
                                                <div class="info">
                                                <h2>{{ $support_desc->title }}</h2>
                                                   <div style="padding-left: 10px; margin-top: -10px;">
                                                      <div class="image">
                                                         <img src="{{ asset('upload').'/'.$item->image }}" alt="{{ asset('upload').'/'.$item->image }}">
                                                         {{-- <img src="http://issq.org.vn/image/data/cskh.jpg"> --}}
                                                      </div>
                                                      <p style="    padding-left: 55px;">
                                                         <span><a href="skype:{{ $item->linkSkype }}?chat">{{ $support_desc->name }}</a></span><br />
                                                         <img src="{{ asset('interface/pageHome/images/ic-phone.png') }}" width="20px" style="    float: left">
                                                         <span style="    width: 32px; float: left; padding-left: 10px">{{ $item->phone }}</span>
                                                      </p>
                                                   </div>
                                                </div>
                                             </li>
                                          @endforeach
                                          @endisset
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="">
                            <div id="block-views-tin-dao-tao-home-block" class="block block-views" style="margin-top: 0px">
                               <div class="content">
                                  <div class="view view-tin-dao-tao-home view-id-tin_dao_tao_home view-display-id-block view-dom-id-b3c03dd065dc8491d944f89159894e2e">
                                     <div class="view-header">
                                        <div class="tindaotao tinmoi"><a href="tin-tuc.html" class="base_path">Tin đào tạo</a></div>
                                     </div>
                                     <div class="view-content ">
                                         @isset($data)
                                            <?php $i = 0 ?>
                                         @foreach ($data as $dt)
                                             @if(($dt['blogCateName'] === 'Tin tức' || $dt['blogCateName'] === 'News') && $i < 2)
                                                <?php $i++ ?>
                                                <div class="views-row views-row-1 views-row-odd views-row-first">
                                                    <div class="views-field views-field-nothing">
                                                       <span class="field-content">
                                                          <i class="uk-icon-chevron-circle-right"></i>
                                                       <div class="tieude_daotao"><a href="vi/khoa-hoc-do-luong-hoc-ap-dung-trong-tieu-chuan-isoiec-17025-tai-ha-noi.html">{{ Helper::text_limit($dt['blogPost']) }}</a>
                                                             <img src="{{ asset('interface/pageHome/images/boaweb/new.gif') }}" />
                                                         </div>
                                                       </span>
                                                    </div>
                                                 </div>
                                             @endif
                                         @endforeach
                                         @endisset
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="">
                            <div id="block-views-tin-dao-tao-home-block-1" class="block block-views">
                               <h2>Tin tức mới</h2>
                               <div class="content">
                                  <div class="view view-tin-dao-tao-home view-id-tin_dao_tao_home view-display-id-block_1  -small view-dom-id-27625c58393d8e9b8a528d8eadebcd0f">
                                     <div class="view-header">
                                        <div class="tinmoi"><a href="dao-tao.html" class="base_path">Tin tức mới</a></div>
                                     </div>
                                     <div class="view-content uk-grid uk-grid-small">
                                        @isset($data)
                                        <?php $i = 0 ?>
                                        @foreach ($data as $dt)
                                            @if(($dt['blogCateName'] === 'Đào tạo' || $dt['blogCateName'] === 'Trainning') && $i < 2)
                                                <?php $i++ ?>
                                                <div class="views-row views-row-1 views-row-odd views-row-first uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-1">
                                                    <div class="views-field views-field-nothing">
                                                        <span class="field-content">
                                                            <div class="uk-grid uk-grid-small">
                                                                <div class="uk-width-1-2 uk-width-medium-1-3 anh_news uk-flex uk-flex-center uk-flex-middle">
                                                                <figure class="uk-overlay uk-overlay-hover">
                                                                    <div class="uk-overlay-scale"><a href="vi/danh-sach-cac-chuc-duoc-cong-nhan-moi-thang-62019.html">
                                                                        <img src="{{ asset('interface/pageHome/images/boaweb/logo.png') }}" alt="" /></a></div>
                                                                </figure>
                                                                </div>
                                                                <div class="uk-width-1-2 uk-width-medium-2-3 tieude_news"><a href="vi/danh-sach-cac-chuc-duoc-cong-nhan-moi-thang-62019.html">{{ Helper::text_limit($dt['blogPost']) }}</a>
                                                                    <img src="{{ asset('interface/pageHome/images/boaweb/new.gif') }}" />
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                             @endif
                                         @endforeach
                                         @endisset
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="clearfix" style="    clear: both;"></div>
                   </div>
                   <div class="">
                      <div id="block-block-4" class="block block-block">
                         <div class="content">
                            <div class="tieude_linklk">Liên kết đối tác</div>
                            <div class="uk-margin" data-uk-slideset="{small: 3,large: 5, animation: 'scale', pauseOnHover: 'true'}">
                               <div class="uk-slidenav-position uk-margin">
                                  <ul class="uk-slideset uk-grid uk-flex-center uk-flex-middle">
                                     @isset($partners)
                                       @foreach ($partners as $item)
                                          <li class="uk-text-center">
                                             <figure class="uk-overlay uk-overlay-hover">
                                                <div class="uk-overlay-scale">
                                                <img src="{{ asset('upload').'/'.$item->image }}" title="{{ $item->title}}" />
                                                </div>
                                                <a class="uk-position-cover" href="{{ $item->url}}" target="_blank"></a>
                                          </li>
                                          </figure>
                                       @endforeach
                                     @endisset
                                  </ul>
                                  <a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                                  <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
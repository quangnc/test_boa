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
                    <div class="uk-width-1-1 uk-width-medium-3-4">
                        <div class="">
                            <div id="block-block-3" class="block block-block">
                            <div class="content">
                                <div class="uk-slidenav-position"
                                    data-uk-slideshow="{animation:'random-fx', autoplay:true,autoplayInterval:'5000'}">
                                    <ul class="uk-slideshow">
                                        <li>
                                        <img src="{{ asset('interface/pageHome/sites/default/files/styles/906x360/public/img-3402d51d.jpg?itok=Wm1-HJbJ') }}"/>
                                        <div class="slide-title uk-text-left"></div>
                                        </li>
                                        <li>
                                        <img src="{{ asset('interface/pageHome/sites/default/files/styles/906x360/public/nqn_8021_140a2.jpg?itok=cX1ms9G9') }}"/>
                                        <div class="slide-title uk-text-left"></div>
                                        </li>
                                        <li>
                                        <img src="{{ asset('interface/pageHome/sites/default/files/styles/906x360/public/img_9097_0e8ca.jpg?itok=YKBwqDc9') }}"/>
                                        <div class="slide-title uk-text-left"></div>
                                        </li>
                                    </ul>
                                    <a href="#"
                                        class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous"
                                        data-uk-slideshow-item="previous"></a><a href="#"
                                        class="uk-slidenav uk-slidenav-contrast uk-slidenav-next"
                                        data-uk-slideshow-item="next"></a>
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
                            <div id="block-block-7" class="block block-block">
                            <h2>Các phòng dịch vụ</h2>
                            <div class="content">
                                <div class="uk-grid">
                                    <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-2">
                                        <div class="thinghiem">
                                        <div class="tieude_dichvu">Phòng thí nghiệm</div>
                                        <div id="block-menu-menu-menu-phong-thi-nghiem"
                                            class="block block-menu">
                                            <h2>Danh mục</h2>
                                            <div class="content">
                                                <ul class="menu">
                                                    <li class="first leaf"><a
                                                    href="vi/phong-thi-nghiem-18.html"
                                                    title="">Giới thiệu</a></li>
                                                    <li class="leaf"><a
                                                    href="vi/tim-kiem-thi-nghiem.html"
                                                    title="">Tìm kiếm</a></li>
                                                    <li class="leaf"><a
                                                    href="vi/bieu-mau-phong-thi-nghiem-0.html"
                                                    title="">Biểu mẫu</a></li>
                                                    <li class="leaf"><a
                                                    href="vi/tai-lieu-thi-nghiem-0.html"
                                                    title="">Tài liệu</a></li>
                                                    <li class="last leaf"><a
                                                    href="vi/thi-nghiem.html" title="">Gia
                                                    hạn, đình chỉ, hủy bỏ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-width-small-1-2  uk-width-medium-1-2">
                                        <div class="chungnhan">
                                        <div class="tieude_dichvu">Tổ chức chứng nhận</div>
                                        <div id="block-menu-menu-menu-to-chuc-chung-nhan"
                                            class="block block-menu">
                                            <h2>Danh mục</h2>
                                            <div class="content">
                                                <ul class="menu">
                                                    <li class="first leaf"><a
                                                    href="vi/chuc-chung-nhan-0.html"
                                                    title="">Giới thiệu</a></li>
                                                    <li class="leaf"><a
                                                    href="vi/tim-kiem-chung-nhan.html"
                                                    title="">Tìm kiếm</a></li>
                                                    <li class="leaf"><a
                                                    href="vi/bieu-mau-dang-ky-phong-chung-nhan.html"
                                                    title="">Biểu mẫu</a></li>
                                                    <li class="leaf"><a
                                                    href="vi/tai-lieu-chung-nhan-0.html"
                                                    title="">Tài liệu</a></li>
                                                    <li class="last leaf"><a
                                                    href="vi/chung-nhan.html" title="">Gia
                                                    hạn, đình chỉ, hủy bỏ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-grid ">
                                    <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-2">
                                        <div class="giamdinh">
                                        <div class="tieude_dichvu">Tổ chức giám định</div>
                                        <div id="block-menu-menu-menu-to-chuc-giam-dinh"
                                            class="block block-menu">
                                            <h2>Danh mục</h2>
                                            <div class="content">
                                                <ul class="menu">
                                                    <li class="first leaf"><a
                                                    href="vi/chuc-giam-dinh-0.html"
                                                    title="">Giới thiệu</a></li>
                                                    <li class="leaf"><a
                                                    href="vi/tim-kiem-giam-dinh.html"
                                                    title="">Tìm kiếm</a></li>
                                                    <li class="leaf"><a
                                                    href="vi/bieu-mau-phong-giam-dinh-0.html"
                                                    title="">Biểu mẫu</a></li>
                                                    <li class="leaf"><a
                                                    href="vi/tai-lieu-giam-dinh-0.html"
                                                    title="">Tài liệu</a></li>
                                                    <li class="last leaf"><a
                                                    href="vi/ds-giam-dinh.html" title="">Gia
                                                    hạn, đình chỉ, hủy bỏ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-2">
                                        <div class="yte">
                                        <div class="tieude_dichvu">Phòng thí nghiệm y tế</div>
                                        <div id="block-menu-menu-menu-phong-thi-nghiem-y-te"
                                            class="block block-menu">
                                            <h2>Danh mục</h2>
                                            <div class="content">
                                                <ul class="menu">
                                                    <li class="first leaf"><a
                                                    href="vi/phong-thi-nghiem-y-te-0.html"
                                                    title="">Giới thiệu</a></li>
                                                    <li class="leaf"><a href="vi/tim-kiem-y-te.html"
                                                    title="">Tìm kiếm</a></li>
                                                    <li class="leaf"><a
                                                    href="vi/bieu-mau-phong-y-te-0.html"
                                                    title="">Biểu mẫu</a></li>
                                                    <li class="leaf"><a
                                                    href="vi/tai-lieu-y-te-0.html" title="">Tài
                                                    liệu</a>
                                                    </li>
                                                    <li class="last leaf"><a href="vi/y-te.html"
                                                    title="">Gia hạn, đình
                                                    chỉ, hủy bỏ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="">
                            <div id="block-block-4" class="block block-block">
                            <div class="content">
                                <div class="tieude_linklk">Liên kết đối tác</div>
                                <div class="uk-margin"
                                    data-uk-slideset="{small: 3,large: 5, animation: 'scale', pauseOnHover: 'true'}">
                                    <div class="uk-slidenav-position uk-margin">
                                        <ul class="uk-slideset uk-grid uk-flex-center uk-flex-middle">
                                        <li class="uk-text-center">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="uk-overlay-scale"><img
                                                    src="{{ asset('interface/pageHome/sites/default/files/styles/95x90/public/a30bs9qk_ilac_069fc.jpg?itok=QpM-rQ6I') }}"/>
                                                </div>
                                                <a class="uk-position-cover"
                                                    href="http://www.ilac.org/" target="_blank"></a>
                                        </li>
                                        </figure>
                                        <li class="uk-text-center">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="uk-overlay-scale"><img
                                                    src="{{ asset('interface/pageHome/sites/default/files/styles/95x90/public/apac_logo_header_00106daea2b8.png?itok=9C2g5VR_') }}"/>
                                                </div>
                                                <a class="uk-position-cover"
                                                    href="https://www.apac-accreditation.org/"
                                                    target="_blank"></a>
                                        </li>
                                        </figure>
                                        <li class="uk-text-center">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="uk-overlay-scale"><img
                                                    src="{{ asset('interface/pageHome/sites/default/files/styles/95x90/public/a30bsfqa_img_iaf8935.jpg?itok=6ZI_sqtV') }}"/>
                                                </div>
                                                <a class="uk-position-cover"
                                                    href="http://www.iaf.nu/" target="_blank"></a>
                                        </li>
                                        </figure>
                                        <li class="uk-text-center">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="uk-overlay-scale"><img
                                                    src="{{ asset('interface/pageHome/sites/default/files/styles/95x90/public/tai_xuong65de.png?itok=digdWHhH') }}"/>
                                                </div>
                                                <a class="uk-position-cover"
                                                    href="http://www.most.gov.vn/"
                                                    target="_blank"></a>
                                        </li>
                                        </figure>
                                        <li class="uk-text-center">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="uk-overlay-scale"><img
                                                    src="{{ asset('interface/pageHome/sites/default/files/styles/95x90/public/tdcs_logo2600.jpg?itok=7mCZnL4S') }}"/>
                                                </div>
                                                <a class="uk-position-cover"
                                                    href="http://www.tcvn.vn/sites/head/vi/trang-chu.aspx"
                                                    target="_blank"></a>
                                        </li>
                                        </figure>
                                        </ul>
                                        <a href="#" class="uk-slidenav uk-slidenav-previous"
                                        data-uk-slideset-item="previous"></a>
                                        <a href="#" class="uk-slidenav uk-slidenav-next"
                                        data-uk-slideset-item="next"></a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1 uk-width-medium-1-4">
                        <div class="">
                            <div id="block-views-exp-taxonomy-tin-tuc-page-1" class="block block-views">
                            <h2>Tìm kiếm</h2>
                            <div class="content">
                                <form action="http://boa.gov.vn/vi/timkiem/%2A" method="get"
                                    id="views-exposed-form-taxonomy-tin-tuc-page-1"
                                    accept-charset="UTF-8">
                                    <div>
                                        <div class="views-exposed-form">
                                        <div class="views-exposed-widgets clearfix">
                                            <div id="edit-combine-wrapper"
                                                class="views-exposed-widget views-widget-filter-combine">
                                                <label for="edit-combine">
                                                Combine fields filter </label>
                                                <div class="views-widget">
                                                    <div class="form-item form-type-textfield form-item-combine">
                                                    <input type="text" id="edit-combine"
                                                        name="combine" value="" size="30"
                                                        maxlength="128" class="form-text"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="views-exposed-widget views-submit-button">
                                                <input type="submit"
                                                    id="edit-submit-taxonomy-tin-tuc" name=""
                                                    value="Áp dụng" class="form-submit"/>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                        <div class="">
                            <div id="block-block-11" class="block block-block">
                            <div class="content">
                                <script src='www.google.com/recaptcha/api327f.js?hl=vi'></script>
                                <div class="tieude_dk"><img src="{{ asset('interface/pageHome/images/boaweb/user.png' ) }}"/>Nộp đơn đăng
                                    ký
                                </div>
                                <form action="http://boa.gov.vn/vi/node/add/dang-ky" method="get"
                                    id="dang-ky-fake">
                                    <input type="text" placeholder="Tên đơn vị" name="dangky_dv"
                                        id="donvi" required/>
                                    <input type="email" placeholder="Email" name="dangky_email"
                                        id="dangky_email"/>
                                    <input type="text" placeholder="Số điện thoại" name="dangky_dt"
                                        id="dangky_dt"/>
                                    <input type="text" placeholder="Mã số công nhận do BoA cấp (nếu có)"
                                        name="dangky_ms" id="dangky_ms"/>
                                    <select name="chondichvu">
                                        <option value="256">Phòng thí nghiệm</option>
                                        <option value="259">Phòng thí nghiệm y tế</option>
                                        <option value="258">Tổ chức chứng nhận</option>
                                        <option value="257">Tổ chức giám định</option>
                                    </select>
                                    <input type="submit" value="Đăng ký" id="dangky"
                                        style="cursor:pointer"/>
                                </form>
                                <div class="tailieu"><a href="node/15428.html">**Hướng dẫn nộp đơn đăng
                                    ký online</a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="">
                            <div id="block-views-tin-dao-tao-home-block" class="block block-views">
                            <div class="content">
                                <div class="view view-tin-dao-tao-home view-id-tin_dao_tao_home view-display-id-block view-dom-id-b3c03dd065dc8491d944f89159894e2e">
                                    <div class="view-header">
                                        <div class="tindaotao">Tin đào tạo</div>
                                    </div>
                                    <div class="view-content ">
                                        <div class="views-row views-row-1 views-row-odd views-row-first">
                                        <div class="views-field views-field-nothing">
                                            <span
                                                class="field-content">
                                                <i
                                                    class="uk-icon-chevron-circle-right"></i>
                                                <div
                                                    class="tieude_daotao"><a
                                                    href="vi/khoa-hoc-do-luong-hoc-ap-dung-trong-tieu-chuan-isoiec-17025-tai-ha-noi.html">Khóa học: “Đo lường học áp dụng trong Tiêu chuẩn ISO/IEC...</a><img
                                                    src="{{ asset('interface/pageHome/images/boaweb/new.gif' ) }}"/></div>
                                            </span>
                                        </div>
                                        </div>
                                        <div class="views-row views-row-2 views-row-even">
                                        <div class="views-field views-field-nothing">
                                            <span
                                                class="field-content">
                                                <i
                                                    class="uk-icon-chevron-circle-right"></i>
                                                <div
                                                    class="tieude_daotao"><a
                                                    href="vi/khoa-hoc-tieu-chuan-isoiec-170252017-tai-ha-noi-0.html">Khóa học: “Tiêu chuẩn ISO/IEC 17025:2017” tại Hà Nội</a><img
                                                    src="{{ asset('interface/pageHome/images/boaweb/new.gif' ) }}"/></div>
                                            </span>
                                        </div>
                                        </div>
                                        <div class="views-row views-row-3 views-row-odd views-row-last">
                                        <div class="views-field views-field-nothing">
                                            <span
                                                class="field-content">
                                                <i
                                                    class="uk-icon-chevron-circle-right"></i>
                                                <div
                                                    class="tieude_daotao"><a
                                                    href="vi/khoa-hoc-quan-ly-phong-thi-nghiem-theo-tieu-chuan-isoiec-170252017-tai-tp-ho-chi-minh-0.html">Khóa học “Quản lý phòng thí nghiệm theo tiêu chuẩn ISO/IEC...</a><img
                                                    src="{{ asset('interface/pageHome/images/boaweb/new.gif' ) }}"/></div>
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    document.getElementsByTagName('body')[0].className += ' page-views';
                                    if (document.getElementById('page-title')) {
                                        document.getElementById('page-title').style.display = 'none';
                                    }
                                </script>
                            </div>
                            </div>
                        </div>
                        <div class="">
                            <div id="block-views-tin-dao-tao-home-block-1" class="block block-views">
                            <h2>Tin tức mới</h2>
                            <div class="content">
                                <div class="view view-tin-dao-tao-home view-id-tin_dao_tao_home view-display-id-block_1  -small view-dom-id-27625c58393d8e9b8a528d8eadebcd0f">
                                    <div class="view-header">
                                        <div class="tinmoi"><a href="tin-tuc.html" class="base_path">Tin
                                        tức mới</a>
                                        </div>
                                    </div>
                                    <div class="view-content uk-grid uk-grid-small">
                                        <div class="views-row views-row-1 views-row-odd views-row-first uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-1">
                                        <div class="views-field views-field-nothing">
                                            <span
                                                class="field-content">
                                                <div
                                                    class="uk-grid uk-grid-small">
                                                    <div class="uk-width-1-2 uk-width-medium-1-3 anh_news uk-flex uk-flex-center uk-flex-middle">
                                                    <figure class="uk-overlay uk-overlay-hover">
                                                        <div class="uk-overlay-scale"><a href="vi/danh-sach-cac-chuc-duoc-cong-nhan-moi-thang-62019.html"><img
                                                            src="{{ asset('interface/pageHome/sites/default/files/styles/80x50/public/default_images/untitled-1ee68.jpg?itok=8U7YWRQs') }}" alt=""/></a></div>
                                                    </figure>
                                                    </div>
                                                    <div class="uk-width-1-2 uk-width-medium-2-3 tieude_news"><a
                                                    href="vi/danh-sach-cac-chuc-duoc-cong-nhan-moi-thang-62019.html">Danh sách các tổ chức được công nhận mới tháng 6/...</a><img
                                                    src="{{ asset('interface/pageHome/images/boaweb/new.gif' ) }}"/></div>
                                                </div>
                                            </span>
                                        </div>
                                        </div>
                                        <div class="views-row views-row-2 views-row-even uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-1">
                                        <div class="views-field views-field-nothing">
                                            <span
                                                class="field-content">
                                                <div
                                                    class="uk-grid uk-grid-small">
                                                    <div class="uk-width-1-2 uk-width-medium-1-3 anh_news uk-flex uk-flex-center uk-flex-middle">
                                                    <figure class="uk-overlay uk-overlay-hover">
                                                        <div class="uk-overlay-scale"><a href="vi/danh-sach-cac-chuc-duoc-cong-nhan-moi-thang-52019.html"><img
                                                            src="{{ asset('interface/pageHome/sites/default/files/styles/80x50/public/default_images/untitled-1ee68.jpg?itok=8U7YWRQs') }}" alt=""/></a></div>
                                                    </figure>
                                                    </div>
                                                    <div class="uk-width-1-2 uk-width-medium-2-3 tieude_news"><a
                                                    href="vi/danh-sach-cac-chuc-duoc-cong-nhan-moi-thang-52019.html">Danh sách các tổ chức được công nhận mới tháng 5/...</a><img
                                                    src="{{ asset('interface/pageHome/images/boaweb/new.gif' ) }}"/></div>
                                                </div>
                                            </span>
                                        </div>
                                        </div>
                                        <div class="views-row views-row-3 views-row-odd views-row-last uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-1">
                                        <div class="views-field views-field-nothing">
                                            <span
                                                class="field-content">
                                                <div
                                                    class="uk-grid uk-grid-small">
                                                    <div class="uk-width-1-2 uk-width-medium-1-3 anh_news uk-flex uk-flex-center uk-flex-middle">
                                                    <figure class="uk-overlay uk-overlay-hover">
                                                        <div class="uk-overlay-scale"><a href="vi/thong-diep-ve-ngay-cong-nhan-gioi-962019.html"><img
                                                            src="{{ asset('interface/pageHome/sites/default/files/styles/80x50/public/2019/06/tintuc/img_3081ea86.jpg?itok=6Tga4MSz') }}" width="35"
                                                            height="50" alt=""/></a></div>
                                                    </figure>
                                                    </div>
                                                    <div class="uk-width-1-2 uk-width-medium-2-3 tieude_news"><a
                                                    href="vi/thong-diep-ve-ngay-cong-nhan-gioi-962019.html">Thông Điệp về ngày Công nhận thế giới 9.6.2019</a><img
                                                    src="{{ asset('interface/pageHome/images/boaweb/new.gif' ) }}"/></div>
                                                </div>
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    document.getElementsByTagName('body')[0].className += ' page-views';
                                    if (document.getElementById('page-title')) {
                                        document.getElementById('page-title').style.display = 'none';
                                    }
                                </script>
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
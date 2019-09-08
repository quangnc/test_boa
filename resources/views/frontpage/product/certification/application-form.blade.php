@extends('layouts.app')
@section('content')
@include('frontpage.product.menu-thieu')

<div id="main-content">
   <div id="navigation">
      <div class="tabs-secondary clearfix">
         <ul class="tabs secondary"></ul>
      </div>
   </div>
   <div class="region region-content">
      <div id="block-system-main" class="block block-system">
            <h1 class="title" id="page-title"> Biểu mẫu đăng ký tổ chức chứng nhận </h1>
         <div class="content">
            <div class="view view-danh-sach-bieu-mau view-id-danh_sach_bieu_mau view-display-id-page view-dom-id-edecb78fdceaa230107aa04c66d9f794">
               <div class="view-content ">
                  <table class="views-table cols-4">
                     <thead>
                        <tr>
                           <th class="views-field views-field-counter">
                              STT          
                           </th>
                           <th class="views-field views-field-nothing">
                              Tên tài liệu          
                           </th>
                           <th class="views-field views-field-created">
                              Phiên bản          
                           </th>
                           <th class="views-field views-field-php">
                              Tải về          
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                           @isset($file)
                              <?php $i = 0; ?>
                              @foreach ($file as $item)
                                 <?php 
                                    $i++;
                                 ?>
                                 <tr class="odd views-row-first">
                                    <td class="views-field views-field-counter">
                                       {{ $i }}       
                                    </td>
                                    <td class="views-field views-field-nothing">
                                    <div class="bieumau">{{ $item->file }}</div>
                                    </td>
                                    <td class="views-field views-field-created">
                                      {{ Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}       
                                    </td>
                                    <td class="views-field views-field-php">
                                       <div class="bieumau">
                                          <i class="uk-icon-save"></i>
                                          <a href="/upload/file/{{$item->file}}"> Dowload</a></div>
                                       <div id="my-id" class="uk-modal">
                                          <div class="uk-modal-dialog">
                                             <a class="uk-modal-close uk-close"></a>
                                             Xin vui lòng liên lạc Vaci
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                              @endforeach
                           @endisset
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
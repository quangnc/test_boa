<div id="sidebar-right">
    <div class="region region-sidebar-right">
       <div id="block-views-tin-dao-tao-home-block-3" class="block block-views">
          <h2>Tin tức mới</h2>
          <div class="content">
             <div class="view view-tin-dao-tao-home view-id-tin_dao_tao_home view-display-id-block_3  -small view-dom-id-0d5e88cdf6114880755a2acb57c7480a">
                <div class="view-header">
                   <div class="tinmoi"><a href="/tin-tuc" class="base_path">Tin tức mới</a></div>
                </div>
                <div class="view-content uk-grid uk-grid-small">
                    @isset($data['news'])
                    <?php $i = 0 ?>
                    @foreach ($data['news'] as $dt)
                        @if(($dt['blogCateName'] === 'Tin tức' || $dt['blogCateName'] === 'News') && $i < 7)
                            <?php $i++ ?>
                            <div class="views-row views-row-1 views-row-odd views-row-first uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-1">
                                <div class="views-field views-field-nothing">
                                    <span class="field-content">
                                        <div class="uk-grid uk-grid-small">
                                            <div class="uk-width-1-2 uk-width-medium-1-3 anh_news uk-flex uk-flex-center uk-flex-middle">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="uk-overlay-scale">
                                                <a href="{{ route('laboratories-detail', $dt['id']) }}">
                                                    <img src="{{ asset('public/upload').'/'.$dt['img'] }}" alt="">
                                                    </a>
                                                </div>
                                            </figure>
                                            </div>
                                            <div class="uk-width-1-2 uk-width-medium-2-3 tieude_news">
                                                <a href="{{ route('laboratories-detail', $dt['id']) }}">{{ Helper::text_limit($dt['blogPost']) }}</a>
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
       <div id="block-views-tin-dao-tao-home-block-2" class="block block-views">
          <h2>Tin đào tạo_home</h2>
          <div class="content">
             <div class="view view-tin-dao-tao-home view-id-tin_dao_tao_home view-display-id-block_2 view-dom-id-ef3115d1f9f009b19a18bd231ca4734f">
                <div class="view-header">
                    <div class="tinmoi tindaotao"><a href="/tin-tuc" class="base_path">Tin đào tạo</a></div>
                </div>
                <div class="view-content ">
                    @isset($data['news'])
                    <?php $i = 0 ?>
                    @foreach ($data['news'] as $dt)
                        @if(($dt['blogCateName'] === 'Đào tạo' || $dt['blogCateName'] === 'Trainning') && $i < 2)
                            <?php $i++ ?>
                            <div class="views-row views-row-1 views-row-odd views-row-first">
                                <div class="views-field views-field-nothing">
                                    <span class="field-content">
                                        <i class="uk-icon-chevron-circle-right"></i>
                                        <div class="tieude_daotao">
                                            <a href="{{ route('laboratories-detail', $dt['id']) }}">{{ Helper::text_limit($dt['blogPost']) }}...</a>
                                            <img src="{{ asset('interface/pageHome/images/boaweb/new.gif') }}">
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
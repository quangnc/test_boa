<div id="content-before">
    <div class="region region-content-before">
        <div id="block-block-1" class="block block-block">
            <div class="content">
                <div class="logo">
                    <a href="{{ route('homepage') }}">
                        <img src="{{ Storage::url($setting['logo']) }}" alt="{{ Storage::url($setting['logo']) }}"> 
                    </a>
                </div>
                <div class="ten_cty">VIỆN CÔNG NHẬN CHẤT LƯỢNG VIỆT NAM</div>
                <div class="cong-nhan">
                        <a href="{{ route('homepage') }}">
                            <img src="{{ asset('interface/pageHome/images/boaweb/congnhan.png') }}" alt="{{ asset('interface/pageHome/images/boaweb/congnhan.png') }}" style="    height: 100px;
                            margin-top: 14px;
                            margin-left: 32px;">
                        </a>
                    </div>
                    
            </div>
        </div>
        <div id="block-block-2" class="block block-block">
            <div class="content">
                <div class="uk-grid uk-grid-collapse">
                <div class="uk-width-1-1 uk-width-medium-8-10">
                    <div id="block-nice-menus-1" class="block block-nice-menus">
                        <h2><span class="nice-menu-hide-title">Menu chính</span></h2>
                        <div class="content">
                            <ul class="nice-menu nice-menu-down nice-menu-menu-menu-chinh" id="nice-menu-1">
                                @isset($menus)
                                    @foreach ($menus as $menu)
                                        @if ($menu['menuCateDescription']->name === "Trang chủ")
                                        <li class="menu-649 menu-path-front first odd ">
                                        @else
                                        <li class="menu-650 menuparent  menu-path-front  even ">
                                        @endif
                                        @if ($menu['menuCateDescription']->name === "Liên hệ")
                                        <a href="{{ route('contact') }}" title="Liên hệ" class="active">{{ $menu['menuCateDescription']->name }}</a>
                                        @else
                                        <a href="{{ route('homepage') }}" title="{{ $menu['menuCateDescription']->name }}" class="active">{{ $menu['menuCateDescription']->name }}</a>
                                            @if (count($menu['menuChildren']) > 0)
                                                <ul>
                                                    @foreach ($menu['menuChildren'] as $item)
                                                    <?php 
                                                        $menuDescription =  $item->menu_descriptions()->where('language_id', $menu['language'])->first();
                                                    ?>
                                                    <li class="menu-661 menu-path-node-11966 first odd ">
                                                        <a href="{{ route('information', $item->menu_id ) }}" title="">{{ $menuDescription->name }}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @endif
                                            
                                        </li>
                                    @endforeach
                                @endisset
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1 uk-width-medium-2-10">
                    <div id="block-locale-language" class="block block-locale">
                        <h2>Ngôn ngữ</h2>
                        <div class="content">
                            <ul class="language-switcher-locale-url">
                                @foreach($languages as $language)
                                <li class="{{ $language->language_id == config('app.language', 2) ? 'active' : '' }}">
                                    <a href="{{ route('set-language', $language->language_id) }}">
                                        <img src="{{ asset('public/upload/images/language').'/'.$language->image }}" alt="{{$language->name}}" />
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div id="block-block-9" class="block block-block uk-hidden-large">
            <div class="content">
                <div class="uk-position-top-right"><a href="#offcanvas" class="uk-navbar-toggle"
                data-uk-offcanvas></a></div>
                <div id="offcanvas" class="uk-offcanvas ">
                <div class="uk-offcanvas-bar uk-offcanvas-bar-flip ">
                    <div id="block-menu-menu-menu-chinh" class="block block-menu">
                        <h2>Menu chính</h2>
                        <div class="content">
                            <ul class="menu">
                                @isset($menus)
                                    @foreach ($menus as $menu)
                                        @if ($menu['menuCateDescription']->name === "Trang chủ")
                                        <li class="menu-649 menu-path-front first odd ">
                                        @else
                                        <li class="menu-650 menuparent  menu-path-front  even ">
                                        @endif
                                            <a href="{{ route('homepage') }}" title="" class="active">{{ $menu['menuCateDescription']->name }}</a>
                                        </li>
                                    @endforeach
                                @endisset
                             </ul>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
<div id="sidebar-left">
        <div class="region region-sidebar-left">
            <div id="block-menu-block-1" class="block block-menu">
    
                <h2>Danh mục</h2>
    
                <div class="content">
                    <div class="content">
                        <div class="menu-block-wrapper menu-block-1 menu-name-menu-menu-chinh parent-mlid-0 menu-level-2">
                            <ul class="menu">
                                @isset($listMenu) @foreach ($listMenu as $item) 
                                @if ($data['id'] == $item->menu_id)
                                <li class="leaf active-trail active menu-mlid-663">
                                    <a href="{{ route('information', $item->menu_id ) }}" title="{{ $item->name }}" class="active-trail active-trail active">{{ $item->name }}</a>
                                </li>
                                @else
                                <li class="first leaf menu-mlid-661">
                                    <a href="{{ route('information', $item->menu_id ) }}" title="{{ $item->name }}">{{ $item->name }}</a>
                                </li>
                                @endif @endforeach @endisset
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    
            <div id="block-views-exp-taxonomy-tin-tuc-page-1" class="block block-views">
                <h2>Tìm kiếm</h2>
                <div class="content">
                    <form action="/" method="get" id="views-exposed-form-taxonomy-tin-tuc-page-1" accept-charset="UTF-8">
                        <div>
                            <div class="views-exposed-form">
                                <div class="views-exposed-widgets clearfix">
                                    <div id="edit-combine-wrapper" class="views-exposed-widget views-widget-filter-combine">
                                        <label for="edit-combine">
                                            Combine fields filter </label>
                                        <div class="views-widget">
                                            <div class="form-item form-type-textfield form-item-combine">
                                                <input type="text" id="edit-combine" name="combine" value="" size="30" maxlength="128" class="form-text" placeholder="Tìm kiếm theo từ khóa">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="views-exposed-widget views-submit-button">
                                        <input type="submit" id="edit-submit-taxonomy-tin-tuc" name="" value="Tìm" class="form-submit"> </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="block-block-11" class="block block-block">
    
                @include('frontpage.product.register')
    
            </div>
        </div>
    </div>
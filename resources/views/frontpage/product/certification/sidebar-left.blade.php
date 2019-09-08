<div id="sidebar-left">
    <div class="region region-sidebar-left">
        <div id="block-menu-menu-menu-phong-thi-nghiem" class="block block-menu">

            <h2>Danh mục</h2>

            <div class="content">
                @include('frontpage.product.certification.menu')

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
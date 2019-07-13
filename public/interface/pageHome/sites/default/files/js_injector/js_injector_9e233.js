    $(document).ready(function(){
        $('.view-khoahoc.view-id-khoahoc div#views-fieldset input#edit-title').attr('placeholder','Bạn cần tìm... ?');
        // Nếu hình thức là tập thể thì thay đổi text nút submit 
        $('body.page-node-add .group-khoahoc-dk-ttkh').hide();
        $( "body.page-node-add div#edit-field-khoahoc-dk-hinhthuc-und input" ).on( "click", function() {
    		if($("body.page-node-add div#edit-field-khoahoc-dk-hinhthuc-und input:checked" ).val() == 1){
                $('body.page-node-add form#khoahoc-dangky-node-form input#edit-submit').val('Tiếp theo');
                $('body.page-node-add .group-khoahoc-dk-ttkh').hide();
                $('div#edit-field-khoahoc-dk-sohocvien').show();
                $('div#edit-field-khoahoc-dk-hocvien').show(); 
    	    }else{
                $('body.page-node-add form#khoahoc-dangky-node-form input#edit-submit').val('Gửi');
                $('body.page-node-add .group-khoahoc-dk-ttkh').show();
                $('div#edit-field-khoahoc-dk-sohocvien').hide();
                $('div#edit-field-khoahoc-dk-hocvien').hide();
    	    }
    	});
        if($("body.page-node-edit div#edit-field-khoahoc-dk-hinhthuc-und input:checked" ).val() == 1){
            $('body.page-node-edit .group-khoahoc-dk-ttkh').hide();
            $('div#edit-field-khoahoc-dk-hocvien').show();
        }else{
            $('div#edit-field-khoahoc-dk-hocvien').hide();
        }
        $('div#edit-field-khoahoc-dk-hocvien').show();
    });
    $(document).ready(function(){
        $('#openmodal').trigger('click');
    })
        function fn_clear(n) {
            if (typeof(n) != 'undefined') {
                if (!n.length) {
                    return 0;
                } else {
                    // Settings
                    var thsep = Drupal.settings.format_number.thousands_sep;
                    var depoint = Drupal.settings.format_number.decimal_point;
                    n = n.toString();
                    // Xóa thousands
                    if (thsep === '.') {
                        n = n.replace(/\./g, '');
                    } else {
                        n = n.replace(new RegExp(thsep, 'g'), '');
                    }
                    // Chuyển decimal về định dạng gốc (.)
                    if (depoint !== '.') {
                        n = n.replace(new RegExp(depoint, 'g'), '.');
                    }
                    return n ? parseFloat(n) : 0;
                }
            }
        }
        // Chuyển số sang phần nghìn
        function fn_convert(n) {
            // Settings
            if (typeof(Drupal.settings.format_number) != 'undefined') {
                var thsep = Drupal.settings.format_number.thousands_sep;
                var depoint = Drupal.settings.format_number.decimal_point;
                var thsep_rep = '$1' + thsep;
                n = parseFloat(n).toString();
                // Thêm thousands
                n = n.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, thsep_rep);
                // Thêm decimal
                if (depoint !== '.') {
                    n = n.replace(/\./g, depoint);
                }
                return n;
            }
        }
    // Hàm tính tổng học phí khi thêm mới khóa học
    function boa_total_hocphi() {
        var tong = 0;
        $('div#edit-field-khoahoc-module table tbody tr').each(function(index) {
                var tong_giasp = $(this).find("[name*=field_fc_khoahoc_hocphi]").val();
                tong += fn_clear(tong_giasp);
              $('div#edit-field-khoahoc-tongchiphi [name*=field_khoahoc_tongchiphi]').val(fn_convert(tong));
        });
        }
        $(document).on('change','div#edit-field-khoahoc-module table tbody tr [name*=field_fc_khoahoc_hocphi]',function(){
            
                boa_total_hocphi();
        });
      //Đổi text
     $(document).ready(function(){
       $('.page-node.page-node-add.page-node-add-khoahoc-dangky div#edit-actions input#edit-submit').attr('value','Tiếp theo');
       var tenkh = $('span.ten-khoa-hoc').text();
       $('.page-node.page-node-add.page-node-add-khoahoc-dangky div#content-wrapper div#main-content h1#page-title').html('Đăng ký khóa học </br> '+tenkh);
       $('.node-type-khoahoc-dangky div#content-wrapper div#main-content h1#page-title').html('Đăng ký khóa học </br> '+tenkh);
       //$('.page-node-add-khoahoc-dangky div#content-wrapper div#main-content').prepend('<ul class="progressbar"><li class="active">(Đăng ký Khóa Học)</li><li class="active-last">(Thêm mới học viên)</li></ul>');
      // $('.node-type-khoahoc-dangky.page-views div#main-content').prepend('<ul class="progressbar"><li class="active">(Đăng ký Khóa Học)</li><li class="active-last active">(Thêm mới học viên)</li></ul>');
       $('.page-node-add-hoc-vien h1#page-title').text('Thêm học viên');
    });
    $(document).ready(function(){
    $("table#modulehoc_hocvien_dk input.checkbox_tick").change(function() {
        var arr_sort = new Array();
        $("table#modulehoc_hocvien_dk input.checkbox_tick").each(function()
        {
            if( $(this).is(':checked') )
            {
                arr_sort.push($(this).parents('td').next().text());
            }
        });
        $('textarea#edit-field-khoahoc-dk-modulehoc-und-0-value').val(arr_sort);
    });
      var numbersString1 = $('textarea#edit-field-khoahoc-dk-modulehoc-und-0-value').val();
      if(undefined !== numbersString1 && numbersString1.length > 0){
        var numbersArray1 = numbersString1.split(',');
        $.each( numbersArray1, function( i, l ){
         $('[data-fid='+l+']').attr('checked','checked');
        });
      }
    });
    //tính tổng học phí
    function tinhtongtien_dangkytapthe(){
        // Tính tiền đăng ký tập thể khi chọn module học
        $('div[id*="edit-field-khoahoc-dk-hocvien-und"] input[type=checkbox]').change(function(){
        var total = 0;
        $('div[id*="edit-field-khoahoc-dk-hocvien-und"] input[type=checkbox]').each(function(){
            if( $(this).is(':checked') )
                {
                   total += parseInt($(this).parent().find('.hocphi-module').attr('data-money'));          
                }
        });
        $('input#edit-field-khoahoc-dk-tongtien-und-0-value').val(total);
        });
    }
    $(document).ready(function(){
        tinhtongtien_dangkytapthe();
    	// Tính tiền đăng ký cá nhân khi chọn module học
        $("table#modulehoc_hocvien_dk input.checkbox_tick").change(function()
        {
            var tong = 0;
            $("table#modulehoc_hocvien_dk input.checkbox_tick").each(function()
            {
                if( $(this).is(':checked') )
                {
                   tong += parseInt($(this).parents('tr').find('.hocphi-module').text().replace(/[^\d\.]/g, ''));
                    
                }
            });
            $('input#edit-field-khoahoc-dk-tongtien-und-0-value').val(tong);
        });

        // ------------------------------------------------------------------------------
        $('.group-khoahoc-dk-ttvhd legend').append('<span class="ycgcx"><i> - Yêu cầu ghi chính xác để xuất hóa đơn.</i></span>');
        $('div#edit-field-khoahoc-dk-donvi-canhan').hide();
        $('.form-item-field-khoahoc-dk-hinhthuc-und input').on('change',function(){
            $('.group-khoahoc-dk-div1 input[type=text],.group-khoahoc-dk-div1 input[type=checkbox],input[type=file],.group-khoahoc-dk-div1 select').not($(this)).val("");
            $('.group-khoahoc-dk-div1 input[type=text],.group-khoahoc-dk-div1 input[type=checkbox],input[type=file],.group-khoahoc-dk-div1 select').not($(this)).val("");
            if($(this).val() == 1){
                $('div#edit-field-khoahoc-dk-tongtien').hide();
                $('.title-chon').hide();
                $('td.input-checkbox').hide();
                // $('div#edit-field-khoahoc-dk-donvi-canhan').hide();
                // $('div#edit-field-khoahoc-donvi').show();
                $('div#edit-field-khoahoc-maso').show();
                $('div#edit-field-khoahoc-dk-listvi').show();
                // $('div#edit-field-khoahoc-dk-listvi').show();
                $('div#edit-field-khoahoc-dk-hoten label').text('Họ và tên người đại diện ');
            }else{
                $('div#edit-field-khoahoc-dk-tongtien').show();
                $('.title-chon').show();
                $('td.input-checkbox').show();
                // $('div#edit-field-khoahoc-dk-donvi-canhan').show();
                // $('div#edit-field-khoahoc-donvi').hide();
                $('div#edit-field-khoahoc-maso').hide();
                $('div#edit-field-khoahoc-dk-listvi').hide();
                // $('div#edit-field-khoahoc-dk-diachi').hide();
                $('div#edit-field-khoahoc-dk-hoten label').text('Họ và tên');
            }
        });
    });
    $( document ).ajaxComplete(function() {
        tinhtongtien_dangkytapthe();
    });
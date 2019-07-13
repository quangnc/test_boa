$(document).ready(function(){
	var newValue = $('.dichvu-chitiet .file_phamvi').text().replace('","', '');
	$('.dichvu-chitiet .file_phamvi').text( newValue );
	$('.i18n-vi #edit-field-dangky-diachicoquanchuquan-und-0-value').attr('placeholder','Địa chỉ');
	$('.i18n-vi #edit-field-dangky-loaidichvu .description').text('*Vui lòng tải phụ lục bên dưới');
	$('.i18n-en #dang-ky-node-form .form-actions #edit-submit').val('Register');
	$('.i18n-en #edit-field-dangky-dauilac-und .form-item-field-dangky-dauilac-und-0 label').text('No');
	$('.i18n-en #edit-field-dangky-dauilac-und .form-item-field-dangky-dauilac-und-1 label').text('Yes');
	$('.i18n-en #edit-field-dangky-loaidichvu select option[value=_none]').text('--- Options ---');
	$('.i18n-vi #edit-field-dangky-loaidichvu select option[value=_none]').html('--- Chọn loại đăng ký ---');
	//$('#block-locale-language ul li.first').insertAfter($('#block-locale-language ul li.last'));
	$('#block-views-exp-taxonomy-tin-tuc-page-1 #edit-submit-taxonomy-tin-tuc').val('Tìm');
	$('#block-search-form h2').html('<i class="uk-icon-search-plus"><i> Tìm kiếm');
	$('#block-views-exp-taxonomy-tin-tuc-page-1 #edit-combine').attr('placeholder','Tìm kiếm theo từ khóa');
    $('.i18n-en .ten_cty').text('BUREAU OF ACCREDITATION');
    $('.i18n-en .breadcrumb > a:first').text('Home');
    $('.i18n-en #block-views-exp-taxonomy-tin-tuc-page-1 h2').html('<i class="uk-icon-search-plus"><i> Search');
    $('.i18n-en #block-views-exp-taxonomy-tin-tuc-page-1 #edit-submit-taxonomy-tin-tuc').val('Search');	
    $('.i18n-en #block-views-exp-taxonomy-tin-tuc-page-1 #edit-combine').attr('placeholder','Key Word');
	$('.i18n-en .tindaotao').text('Tranning News');
	$('.i18n-en .thinghiem .tieude_dichvu').text('LABORATORIES');
	$('.i18n-en .chungnhan .tieude_dichvu').text('CERTIFICATION BODIES');
	$('.i18n-en .giamdinh .tieude_dichvu').text('INSPECTION BODIES'); 
	$('.i18n-en .yte .tieude_dichvu').text('  MEDICAL LABORATORIES');
	$('.i18n-en #block-views-tin-dao-tao-home-block-1 h2').text('News');
	$('.i18n-en .tieude_linklk').text('Link');
	$('.node-type-webform.i18n-en h1').text('CONTACT');
    $('.i18n-en #block-views-tin-tuc-khac-block h2').text('OTHER NEWS');
    $('.i18n-en #block-formblock-dang-ky #edit-submit--2').val('Send');
    $('.i18n-vi #block-formblock-dang-ky #edit-submit--2').val('Gửi');
	$('.i18n-vi .node-dang_ky-form #edit-submit').val('Đăng ký');
	$('.i18n-en .tieude_dk').text('Register Online');	
	$('.i18n-en #block-block-11 #dangky').val('Register');
	$('#edit-combine-wrapper').insertBefore($('#edit-field-dichvu-vilas-value-wrapper'));
	$('#edit-combine-wrapper').insertBefore($('#edit-field-dichvu-vias-value-wrapper'));
	$('#edit-combine-wrapper').insertBefore($('#edit-field-dichvu-vicas-value-wrapper'));
	$('#edit-combine-wrapper').insertBefore($('#edit-field-dichvu-vilas-med-value-wrapper'));
	$('.i18n-vi #edit-submit-danh-sach-dich-vu-1').val('Tìm kiếm');
	$('#dang-ky-node-form #edit-submit').attr('data-uk-modal','');
	/*$('#block-menu-menu-menu-phong-thi-nghiem ul  li:nth-child(2) a').attr('target','_blank');
	$('#block-menu-menu-menu-to-chuc-chung-nhan ul  li:nth-child(2) a').attr('target','_blank');
	$('#block-menu-menu-menu-to-chuc-giam-dinh ul  li:nth-child(2) a').attr('target','_blank');
	$('#block-menu-menu-menu-phong-thi-nghiem-y-te ul  li:nth-child(2) a').attr('target','_blank');
	$('#block-menu-menu-menu-phong-thi-nghiem ul  li:nth-child(3) a').attr('target','_blank');
	$('#block-menu-menu-menu-to-chuc-chung-nhan ul  li:nth-child(3) a').attr('target','_blank');
	$('#block-menu-menu-menu-to-chuc-giam-dinh ul  li:nth-child(3) a').attr('target','_blank');
	$('#block-menu-menu-menu-phong-thi-nghiem-y-te ul  li:nth-child(3) a').attr('target','_blank');
	$('#block-menu-menu-menu-phong-thi-nghiem ul  li:nth-child(4) a').attr('target','_blank');
	$('#block-menu-menu-menu-to-chuc-chung-nhan ul  li:nth-child(4) a').attr('target','_blank');
	$('#block-menu-menu-menu-to-chuc-giam-dinh ul  li:nth-child(4) a').attr('target','_blank');
	$('#block-menu-menu-menu-phong-thi-nghiem-y-te ul  li:nth-child(4) a').attr('target','_blank');*/
	$('.view-danh-sach-dich-vu-1 .form-item-combine input').attr('placeholder','Từ khóa');
	$('.view-danh-sach-dich-vu-1 .form-item-field-dichvu-vilas-value input').attr('placeholder','Số VILAS');
	$('.view-danh-sach-dich-vu-1 .form-item-title input').attr('placeholder','Tên phòng');
	$('.view-danh-sach-dich-vu-1 #views-exposed-form-danh-sach-dich-vu-1-page-2 .form-item-title input').attr('placeholder','Tên phòng thí nghiệm');
	$('.view-danh-sach-dich-vu-1 #views-exposed-form-danh-sach-dich-vu-1-page-4 .form-item-title input').attr('placeholder','Tên tổ chức chứng nhận');
	$('.view-danh-sach-dich-vu-1 #views-exposed-form-danh-sach-dich-vu-1-page-3 .form-item-title input').attr('placeholder','Tên tổ chức giám định');
	$('.view-danh-sach-dich-vu-1 #views-exposed-form-danh-sach-dich-vu-1-page-5 .form-item-title input').attr('placeholder','Tên phòng thí nghiệm y tế');
	$('.view-danh-sach-dich-vu-1 .form-item-field-dichvu-chuquan-value input').attr('placeholder','Đơn vị chủ quản');
	$('.view-danh-sach-dich-vu-1 .chosen-container-single .chosen-single span').text('- Tỉnh/Thành phố -');
	$('.view-danh-sach-dich-vu-1 select#edit-field-dichvu-linhvuc-tid option[value="All"]').attr('- Lĩnh vực -');
	$('.view-danh-sach-dich-vu-1 .form-item-combine input').attr('placeholder','Từ khóa');
	$('.page-tim-kiem-thi-nghiem.i18n-en #page-title').text('SEARCH LABORATORIES');
	$('.page-tim-kiem-chung-nhan.i18n-en #page-title').text('SEARCH CERTIFICATION BODIES');
	$('.page-tim-kiem-giam-dinh.i18n-en #page-title').text('SEARCH INSPECTION BODIES');
	$('.page-tim-kiem-y-te.i18n-en #page-title').text('SEARCH MEDICAL LABORATORIES');
	$('.i18n-en .view-danh-sach-dich-vu-1 .form-item-combine input').attr('placeholder','Key word');
	$('.i18n-en .view-danh-sach-dich-vu-1 .form-item-field-dichvu-vilas-value input').attr('placeholder',' Vilas');
	$('.i18n-en .view-danh-sach-dich-vu-1 .form-item-title input').attr('placeholder','Name of Laboratories');
	$('.i18n-en .view-danh-sach-dich-vu-1 .form-item-field-dichvu-chuquan-value input').attr('placeholder','Organization');
	$('.i18n-en #edit-submit-danh-sach-dich-vu-1').val('Search');
	$('.i18n-en .view-danh-sach-dich-vu-1 .chosen-container-single .chosen-single span').text('- Town / City -');
	$('.i18n-en .view-danh-sach-dich-vu-1 select#edit-field-dichvu-linhvuc-tid option[value="All"]').attr('-Field-');
	$('.page-tim-kiem-thi-nghiem.i18n-en th:nth-child(1)').text('VILAS');
	$('.page-tim-kiem-chung-nhan.i18n-en th:nth-child(1)').text('VICAS');
	$('.page-tim-kiem-giam-dinh.i18n-en th:nth-child(1)').text('VIAS');
	$('.page-tim-kiem-y-te.i18n-en th:nth-child(1)').text('VILAS MED');
	$('.i18n-en .view-id-danh_sach_dich_vu_1 th:nth-child(2)').text('Name of Laboratories');
	$('.i18n-en .view-id-danh_sach_dich_vu_1 th.views-field-field-dichvu-chuquan').text('Organization');
	$('.i18n-en .view-id-danh_sach_dich_vu_1 th.views-field-field-dichvu-linhvuc').text('Field');
	$('.i18n-en .view-id-danh_sach_dich_vu_1 th.views-field-field-dichvu-khuvuc').text('City');
	$('#edit-sort-by').append('<option selected="selected" value="field_dichvu_khuvuc_tid">Sắp xếp</option>');
	$('.view-danh-sach-dich-vu-1 .form-item-field-dichvu-vicas-value input').attr('placeholder','Số VICAS');
	$('.i18n-en .view-danh-sach-dich-vu-1 .form-item-field-dichvu-vicas-value input').attr('placeholder','VICAS');
	$('.view-danh-sach-dich-vu-1 .form-item-field-dichvu-vias-value input').attr('placeholder','Số VIAS');
	$('.i18n-en .view-danh-sach-dich-vu-1 .form-item-field-dichvu-vias-value input').attr('placeholder','VIAS');
	$('.view-danh-sach-dich-vu-1 .form-item-field-dichvu-vilas-med-value input').attr('placeholder','Số VILAS MED');
	$('.i18n-en .view-danh-sach-dich-vu-1 .form-item-field-dichvu-vilas-med-value input').attr('placeholder','VILAS MED');
	$('.view-danh-sach-dich-vu-1 #edit_field_dichvu_linhvuc_tid_chosen input').attr('value','Lĩnh vực');
	$('.view-danh-sach-dich-vu-1 #edit_field_dichvu_khuvuc_tid_chosen input').attr({'value':'Tỉnh/TP', 'placeholder':'Tỉnh/TP'});
	$('.i18n-en .view-danh-sach-dich-vu-1 #edit_field_dichvu_linhvuc_tid_chosen input').attr({'value':'Field', 'placeholder':'Field'});
	$('.i18n-en .view-danh-sach-dich-vu-1 #edit_field_dichvu_khuvuc_tid_chosen input').attr({'value':'Province/City', 'placeholder':'Province/City'});
	$('.region .region-sidebar-left').append('<div class="danhmuc"></div>');
	$('.view-danh-sach-dich-vu-1 .view-header').insertAfter($('.view-danh-sach-dich-vu-1 #views-fieldset'));
	$('.i18n-en #block-menu-block-1 h2').text('Menu');
	$('.i18n-en #dang-ky-fake #donvi').attr('placeholder','Unit name');
	$('.i18n-en #dang-ky-fake #dangky_dt').attr('placeholder','Phone');
	$('.i18n-en #dang-ky-fake #dangky_ms').attr('placeholder','Accreditation No');
	$('.i18n-en #batdau').text('---Option---');
	$('#edit-field-dichvu-khuvuc-tid-wrapper .ui-multiselect span').text('Tỉnh/Tp').css({"padding-left":"4px","color":"#767676"});
	$('#edit-field-dichvu-linhvuc-tid-wrapper .ui-multiselect span').text('Lĩnh vực').css({"padding-left":"4px","color":"#767676"});
	$('.i18n-en #edit-field-dichvu-khuvuc-tid-wrapper .ui-multiselect span').text('Province/City').css({"padding-left":"4px","color":"#767676"});
	$('.i18n-en #edit-field-dichvu-linhvuc-tid-wrapper .ui-multiselect span').text('Field').css({"padding-left":"4px","color":"#767676"});
	$('.i18n-en .view-danh-sach-bieu-mau th.views-field-nothing').text('Name Document');
	$('.i18n-en .view-danh-sach-bieu-mau th.views-field-created').text('Date');
	$('.i18n-en .view-danh-sach-bieu-mau th.views-field-php').text('Download');
	$('.i18n-en .view-danh-sach-dich-vu-1 th.views-field-field-dichvu-diadiem').text('Place');
	$('.i18n-en #better-messages-wrapper .messages.sucess').text('Sucess Register');
	$('.page-node-add-dang-ky.i18n-vi #page-title span').text('Đơn đăng ký công nhận');
	$('.page-admin-structure-taxonomy-dich-vu-linh-vuc ul.action-links li a').text('Thêm lĩnh vực');
	//tvhoan 06-01-2017
	$('.views-field-field-dichvu-diadiem br').each(function(){
		$(this).after('<p></p>');
	});
	var arr_loaihinh = [261, 262, 285, 286];
	$('#edit-field-dangky-loaidanhgia input.form-checkbox').change(function(){
		var new_value = []; var new_non_checked = [];
		$('#edit-field-dangky-loaidanhgia input.form-checkbox').each(function(){
			if($(this).is(':checked')){
				new_value.push($(this).val());
			}else{
				new_non_checked.push($(this).val());
			}
		});
		//console.log(new_value);
		//console.log(new_non_checked);
		var same_val = intersect(new_value, arr_loaihinh);
		var diff_val = diff(new_non_checked, arr_loaihinh);
		//console.log(diff_val);
		remove_arr(diff_val, '260');
		remove_arr(diff_val, '287');
		//console.log(same_val);
		//console.log(diff_val);
		if(same_val.length > 0){
			$('#edit-field-dangky-maso').css('display', 'block');
		}
		if(diff_val.length > 1){
			$('#edit-field-dangky-maso').css('display', 'none');
		}
	});
	function intersect(a, b) {
		var d = {};
		var results = [];
		for (var i = 0; i < b.length; i++) {
			d[b[i]] = true;
		}
		for (var j = 0; j < a.length; j++) {
			if (d[a[j]]) 
				results.push(a[j]);
		}
		return results;
	}
	function diff(array1, array2) {
		var diff = [];
		array1.forEach(function(e) {
			if (array2.indexOf(e) === -1) {
				diff.push(e);
			}
		});
		return diff;
	}
	function remove_arr(arr, item) {
		for(var i = arr.length; i--;) {
			if(arr[i] === item) {
				arr.splice(i, 1);
			}
		}
	}
	$('#edit-field-dangky-loaidanhgia input.form-checkbox').trigger('change');    
	$('.ui-multiselect-menu:eq(1)').addClass('linhvuc_js');
	$('.linhvuc_js ul li').each(function(){
		var log = $(this).find('span').text();
			//console.log(log);
			var a = $(this).find('span').text().replace('-',' ');
			$(this).find('span').text(a);
	});
	//07-01-2017

	$('#edit-field-dichvu-nhom-und-0-16-16,#edit-field-dichvu-nhom-und-0-15-15').change(function(){
		if(this.checked){
			$('#edit-field-dichvu-vilas').show();
			$('#edit-field-dichvu-linhvuc-und > ul > li:nth-child(1)').show();
		}
		else{
			$('#edit-field-dichvu-vilas').hide();
			$('#edit-field-dichvu-linhvuc-und > ul > li:nth-child(1)').hide();
		}
	});
		
	$('#edit-field-dichvu-nhom-und-0-18-18,#edit-field-dichvu-nhom-und-0-17-17').change(function(){
		if(this.checked){
			$('#edit-field-dichvu-vias').show();
			$('#edit-field-dichvu-linhvuc-und > ul > li:nth-child(3)').show();
		}
		else{
			$('#edit-field-dichvu-vias').hide();
			$('#edit-field-dichvu-linhvuc-und > ul > li:nth-child(3)').hide();
		}
	});
		
	$('#edit-field-dichvu-nhom-und-0-19-19,#edit-field-dichvu-nhom-und-0-20-20').change(function(){
		if(this.checked){
			$('#edit-field-dichvu-vicas').show();
			$('#edit-field-dichvu-linhvuc-und > ul > li:nth-child(2)').show();
		}
		else{
			$('#edit-field-dichvu-vicas').hide();
			$('#edit-field-dichvu-linhvuc-und > ul > li:nth-child(2)').hide();
		}
	});
		
	$('#edit-field-dichvu-nhom-und-0-21-21,#edit-field-dichvu-nhom-und-0-22-22').change(function(){
		if(this.checked){
			$('#edit-field-dichvu-vilas-med').show();
			$('#edit-field-dichvu-linhvuc-und > ul > li:nth-child(4)').show();
		}
		else{
			$('#edit-field-dichvu-vilas-med').hide();
			$('#edit-field-dichvu-linhvuc-und > ul > li:nth-child(4)').hide();
		}
	});

	$('#edit-field-dichvu-nhom-und-0-16-16,#edit-field-dichvu-nhom-und-0-15-15, #edit-field-dichvu-nhom-und-0-18-18,#edit-field-dichvu-nhom-und-0-17-17, #edit-field-dichvu-nhom-und-0-19-19,#edit-field-dichvu-nhom-und-0-20-20, #edit-field-dichvu-nhom-und-0-21-21,#edit-field-dichvu-nhom-und-0-22-22').trigger('change');
	$('#edit-field-dangky-loaidichvu-und option').each(function(){
		if($('#edit-field-dangky-loaidichvu-und option:selected').val()=='257'){
			$('#bieumau_phonggiamdinh').show();
		}
		else{
			$('#bieumau_phonggiamdinh').hide();
		}
		if($('#edit-field-dangky-loaidichvu-und option:selected').val()=='258'){
			$('#bieumau_phongchungnhan').show();
		}
		else{
			$('#bieumau_phongchungnhan').hide();
		}
		if($('#edit-field-dangky-loaidichvu-und option:selected').val()=='259'){
			$('#bieumau_phongyte').show();
		}
		else{
			$('#bieumau_phongyte').hide();
		}
		if($('#edit-field-dangky-loaidichvu-und option:selected').val()=='256'){
			$('#bieumau_phongthinghiem').show();
		}
		else{
			$('#bieumau_phongthinghiem').hide();
		}
		// phụ lục tiếng ánh
		// phòng thí nghiệm
		if($('#edit-field-dangky-loaidichvu-und option:selected').val()=='289'){
			$('#bieumau_phongthinghiemta').show();
		}
		else{
			$('#bieumau_phongthinghiemta').hide();
		}
		//phòng chứng nhận
		if($('#edit-field-dangky-loaidichvu-und option:selected').val()=='288'){
			$('#bieumau_phongchungnhanta').show();
		}
		else{
			$('#bieumau_phongchungnhanta').hide();
		}
		// phòng y tế
		if($('#edit-field-dangky-loaidichvu-und option:selected').val()=='290'){
			$('#bieumau_phongyteta').show();
		}
		else{
			$('#bieumau_phongyteta').hide();
		}
		if($('#edit-field-dangky-loaidichvu-und option:selected').val()=='291'){
			$('#bieumau_phonggiamdinhta').show();
		}
		else{
			$('#bieumau_phonggiamdinhta').hide();
		}
	});
	
});
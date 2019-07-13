function term_list_search_change(_this,id) {
  var text = $(_this).val();
  if (text.length > 1) {
    $("#" + id + " li a").each(function(){
      $(this).removeClass('highlight');
      if ($(this).text().toLowerCase().indexOf(text) >= 0) {
        $(this).addClass('highlight');
      }
    });
  }
}

function show_more_term(_this,id) {
  $("#"+id + " li").each(function(index){
    $(this).show();
  });
  $(_this).hide();
  return false;
}

(function($){
	$(document).ready(function(){
		$("ul.termlist").treeview({
			collapsed: true,
			animated: "medium",
			persist: "location",
		});
	});
})(jQuery);
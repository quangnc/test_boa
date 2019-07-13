$(document).ready(function(){
  var active1 = $('#navigation .primary li:nth-child(1)').attr('class');
  var active2 = $('#navigation .primary li:nth-child(2)').attr('class');
  if(active1 == 'active'){
    $('#navigation .primary li:nth-child(2)').addClass('display-none');
  }
  if(active2 == 'active'){
    $('#navigation .primary li:nth-child(1)').addClass('display-none');
  }
});
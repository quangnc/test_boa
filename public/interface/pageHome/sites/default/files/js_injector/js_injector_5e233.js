Drupal.behaviors.vinno_base = {
attach: function (context, settings) {
//==================Code start
//===Base path
var bp=Drupal.settings.basePath;
bp=bp.slice(0,bp.length-1);
//link
$('a.base_path').each(function() {
var url=$(this).attr('href');
if(url.indexOf(bp)!=-1){ return;}
url=bp+$(this).attr('href');
$(this).attr('href',url);
});
//image
$('img.base_path').each(function() {
var url=$(this).attr('src');
if(url.indexOf(bp)!=-1){ return;}
url=bp+$(this).attr('src');
$(this).attr('src',url);
});
//==================End code
}
};
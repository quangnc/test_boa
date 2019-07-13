$(document).ready(function(){
	$('.page-node-add-dang-ky h1').wrapInner('<span></span>');
	if( typeof(CKEDITOR) !== "undefined"){
		CKEDITOR.dialog.add('myplugin', function(editor){
			return {
				title: 'My Plugin',
				elements: [{
					type: 'checkbox',
					label: 'click me',
					onClick: function(event){
						// triggered when checkbox is clicked
						var dialog = this.getDialog();
						alert(dialog);
						var checkbox = event.sender;
						alert( 'Checked: ' + this.getValue() );
					}
				}]
			};
		});
		//
		if(CKEDITOR.instances['edit-noidungemailgui-value']){
			CKEDITOR.instances['edit-noidungemailgui-value'].on('change', function() {
				//alert(1);
				//CKEDITOR.instances['edit-noidungemailgui-value'].setData(CKEDITOR.instances['edit-noidungemailgui-value'].getData());
			});
		}
	}
});
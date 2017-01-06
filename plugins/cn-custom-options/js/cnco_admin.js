jQuery(document).ready(function($) {
	
	var cnco_img_uploader;
	var cnco_field;
	var cnco_image;
	
	$('input.cnco_image_button').click(function(e) {
        e.preventDefault();
		
		//alert($(this).data('field'));
		//alert($(this).data('image'));
		
		cnco_field = $(this).data('field');
		cnco_image = $(this).data('image');
		
        //If the uploader object has already been created, reopen the dialog
		
        if (cnco_img_uploader) {
            cnco_img_uploader.open();
            return;
        }
        //Extend the wp.media object
        cnco_img_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose image',
            button: {
                text: 'Set image'
            },
            multiple: false
        });
        //When a file is selected, grab the URL and set it as the text field's value
        cnco_img_uploader.on('select', function() {
            attachment = cnco_img_uploader.state().get('selection').first().toJSON();
			
			//alert(attachment.url);
			//alert(cnco_field);
			//alert(cnco_image);
			
            $('#'+cnco_field).val(attachment.url);
			$('#'+cnco_image).attr('width','150');
			$('#'+cnco_image).attr('src',attachment.url);
			//$('#ftrimg').attr('src',attachment.sizes.thumbnail.url);
			
        });
        //Open the uploader dialog
        cnco_img_uploader.open();
    });
	
});
jQuery(document).ready(function() {

		jQuery('#upload_image_button_1').click(function(){
 		formfield = jQuery('#upload_image_1').attr('name');
 		tb_show('', 'media-upload.php?type=image&amp;TB_iframe=1');
 
		window.send_to_editor = function(html) {
 			imgurl = jQuery('img',html).attr('src');
 			jQuery('#upload_image_1').val(imgurl);
 			tb_remove();
		}
 
	 	return false;
	});
    	jQuery('#upload_image_button_2').click(function(){
 		formfield = jQuery('#upload_image_2').attr('name');
 		tb_show('', 'media-upload.php?type=image&amp;TB_iframe=1');
 
		window.send_to_editor = function(html) {
 			imgurl = jQuery('img',html).attr('src');
 			jQuery('#upload_image_2').val(imgurl);
 			tb_remove();
		}
 
	 	return false;
	});
    	jQuery('#upload_image_button_3').click(function(){
 		formfield = jQuery('#upload_image_3').attr('name');
 		tb_show('', 'media-upload.php?type=image&amp;TB_iframe=1');
 
		window.send_to_editor = function(html) {
 			imgurl = jQuery('img',html).attr('src');
 			jQuery('#upload_image_3').val(imgurl);
 			tb_remove();
		}
 
	 	return false;
	});
    	jQuery('#upload_image_button_4').click(function(){
 		formfield = jQuery('#upload_image_4').attr('name');
 		tb_show('', 'media-upload.php?type=image&amp;TB_iframe=1');
 
		window.send_to_editor = function(html) {
 			imgurl = jQuery('img',html).attr('src');
 			jQuery('#upload_image_4').val(imgurl);
 			tb_remove();
		}
 
	 	return false;
	});
    	jQuery('#upload_image_button_5').click(function(){
 		formfield = jQuery('#upload_image_5').attr('name');
 		tb_show('', 'media-upload.php?type=image&amp;TB_iframe=1');
 
		window.send_to_editor = function(html) {
 			imgurl = jQuery('img',html).attr('src');
 			jQuery('#upload_image_5').val(imgurl);
 			tb_remove();
		}
 
	 	return false;
	});
    	jQuery('#upload_image_button_6').click(function(){
 		formfield = jQuery('#upload_image_6').attr('name');
 		tb_show('', 'media-upload.php?type=image&amp;TB_iframe=1');
 
		window.send_to_editor = function(html) {
 			imgurl = jQuery('img',html).attr('src');
 			jQuery('#upload_image_6').val(imgurl);
 			tb_remove();
		}
 
	 	return false;
	});
    	jQuery('#upload_image_button_7').click(function(){
 		formfield = jQuery('#upload_image_7').attr('name');
 		tb_show('', 'media-upload.php?type=image&amp;TB_iframe=1');
 
		window.send_to_editor = function(html) {
 			imgurl = jQuery('img',html).attr('src');
 			jQuery('#upload_image_7').val(imgurl);
 			tb_remove();
		}
 
	 	return false;
	});
    	jQuery('#upload_image_button_8').click(function(){
 		formfield = jQuery('#upload_image_8').attr('name');
 		tb_show('', 'media-upload.php?type=image&amp;TB_iframe=1');
 
		window.send_to_editor = function(html) {
 			imgurl = jQuery('img',html).attr('src');
 			jQuery('#upload_image_8').val(imgurl);
 			tb_remove();
		}
 
	 	return false;
	});
    });
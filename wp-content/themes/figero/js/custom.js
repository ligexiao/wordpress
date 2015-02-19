/*--------DDsmoothmenu Initialization--------*/
ddsmoothmenu.init({
	mainmenuid: "menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
});
// JavaScript Document
jQuery(window).load(function(){
jQuery('#slides').slides({
	autoHeight: true,
	effect: 'slide',
	container: 'slides_container',
	play:50000,																			play: 6000,
	slideSpeed: 600,
	fadeSpeed: 350,
	generateNextPrev: true,
	generatePagination: false,
	crossfade: true
});
	jQuery( '#slides .pagination' ).wrap( '<div id="slider_pag" />' );
	jQuery( '#slides #slider_pag' ).wrap( '<div id="slider_nav" />' );
});
//Fade images
 jQuery(document).ready(function(){
    jQuery(".featured_content img, .post img, .sidebar .recent_post li img").hover(function() {
      $(this).stop().animate({opacity: "0.5"}, '500');
    },
    function() {
      $(this).stop().animate({opacity: "1"}, '500');
    });
  });
  //Tipsy
  jQuery(function() {    
    jQuery('.social_logos a').tipsy({gravity: 's'});
  });

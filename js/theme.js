$(function(){

	/* Image1 Menu and Image2 Menu Previous and Next Navigation ------ */
	var image2_count = $(".image-2-menu .image2-menu-name").length;
	var current_row2 = 1,  max_rows2 = Math.floor(image2_count / 4), columns;
	if ( (image2_count % 4) > 0 ) max_rows2++;

	
	/* Image 2 Menu NAV*/
	$(".post-with-image-2-wrapper .image-2-previous").click(function(){
		if ( current_row2 != 1 ) { 
			$('.image-2-menu').animate({top: "+=35px"}, 0);
			current_row2--;
		}
	});
	
	$(".post-with-image-2-wrapper .image-2-next").click(function(){
		if ( current_row2 != max_rows2 ) {
			$('.image-2-menu').animate({top: "-=35px"}, 0);
			current_row2++;
		}
	});
	
	if ( $(window).width() > 625 ) $(".first-menu").find('.not-active-background').css('display','none').siblings('.active-background').css('display','block').siblings('.menu2_name').css('color','#ffb848');
	
	$(".mobile-menu-button").click(function(){
		if ( $(".layout > .inner").hasClass("menu_open") ) { 
			$(".layout > .inner").removeClass("menu_open").css("left", 0);
			$(".mobile-menu-wrapper").css('display', 'none');
		} else {
			$(".layout > .inner").addClass("menu_open").css("left", "220px");
			$(".mobile-menu-wrapper").css('display', 'block');
		}		
	});
	
	var image_menu_name;
	$(".image-menu-name").click(function(){
		image_menu_name = $(this).attr('menu_name');
		$(".image-menu-name .inner").removeClass('selected');
		$(this).find('.inner').addClass('selected');
		$(".post-full-image."+image_menu_name).addClass('selected').siblings('.post-full-image').removeClass('selected');
	});

	var category_name;
	$(".post-with-image-more").click(function() {
		if ( !($(this).text().indexOf('more') >= 5 )) {
			category_name = $(this).attr('post_category');
			$(this).html("<a href='bbs/board.php?bo_table="+category_name+"'>view more</a>");
			$("."+category_name+" .gallery4-with-image-2").addClass('selected');
		}
	});
	
	
	var image2_menu_name;
	$(".image2-menu-name").click(function(){
		image_menu_name = $(this).attr('menu2_name');
		
		$(".image2-menu-name").removeClass('selected');
		if ( $(window).width() > 625 ) {
			$(".not-active-background").css('display','block').siblings('.active-background').css('display','none').siblings('.menu2_name').css('color','#ffffff');
			$(this).addClass('selected').find('.not-active-background').css('display','none').siblings('.active-background').css('display','block').siblings('.menu2_name').css('color','#ffb848');
		} else $(this).addClass('selected');
		
		$(".post-with-image-more").removeClass('selected');
		$(".post-with-image-2."+image_menu_name).addClass('selected').siblings('.post-with-image-2').removeClass('selected');
	});
	
	/* ------- Navigation Functions ends here */
});
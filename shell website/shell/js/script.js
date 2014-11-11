// JavaScript Document


    
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('header').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");
    }
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('nav').addClass("header");
    }
    else{
        $('nav').removeClass("header");
    }
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('#back').addClass("header2");
    }
    else{
        $('#back').removeClass("header2");
    }
});


jQuery(document).ready(function(){
	var siteTopPosition = jQuery('header').offset().top;
	jQuery('#homelink').click(function(){
		jQuery('html, body').animate({scrollTop:siteTopPosition}, 'slow');
		return false;
	});
});

jQuery(document).ready(function(){
	var siteTopPosition = jQuery('#anchor1').offset().top;
	jQuery('#aboutlink').click(function(){
		jQuery('html, body').animate({scrollTop:siteTopPosition}, 'slow');
		return false;
	});
});

jQuery(document).ready(function(){
	var siteTopPosition = jQuery('#anchorport').offset().top -90;
	jQuery('#portlink').click(function(){
		jQuery('html, body').animate({scrollTop:siteTopPosition}, 'slow');
		return false;
	});
});

jQuery(document).ready(function(){
	var siteTopPosition = jQuery('#anchor3').offset().top;
	jQuery('#resumelink').click(function(){
		jQuery('html, body').animate({scrollTop:siteTopPosition}, 'slow');
		return false;
	});
});



jQuery(document).ready(function(){
	var siteTopPosition = jQuery('#anchor1').offset().top -40;
	jQuery('#arrow').click(function(){
		jQuery('html, body').animate({scrollTop:siteTopPosition}, 'slow');
		return false;
	});
});




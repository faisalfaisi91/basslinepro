/*  Table of Contents 
01. MENU ACTIVATION
02. FITVIDES RESPONSIVE VIDEOS 
03. MOBILE MENU
04. SCROLL TO TOP MENU JS 
05. PRELOADER JS
06. STICKY HEADER JS
07. SHOW/HIDE SEARCH & Profile
08. Comments/Social Icons ON/Off
09. Comment JS
10. Range Slider in Header Search
*/

jQuery(document).ready(function($) {
	 'use strict';

/*
=============================================== 01. MENU ACTIVATION  ===============================================
*/
	 jQuery('.progression-studios-one-page-nav-off nav#site-navigation ul.sf-menu').superfish({
			 	popUpSelector: 'ul.sub-menu,.sf-mega', 	// within menu context
	 			delay:      	200,                	// one second delay on mouseout
	 			speed:      	0,               		// faster \ speed
		 		speedOut:    	200,             		// speed of the closing animation
				animation: 		{opacity: 'show'},		// animation out
				animationOut: 	{opacity: 'hide'},		// adnimation in
		 		cssArrows:     	true,              		// set to false
			 	autoArrows:  	true,                    // disable generation of arrow mark-up
		 		disableHI:      true,
	 });

/*
=============================================== 02. FITVIDES RESPONSIVE VIDEOS  ===============================================
*/
	 $("#content-pro, #video-page-title-pro").fitVids();

	 
/*
=============================================== 03. MOBILE MENU  ===============================================
*/
	 
   	$('ul.mobile-menu-pro').slimmenu({
   	    resizeWidth: '960',
   	    collapserTitle: 'Menu',
   	    easingEffect:'easeInOutQuint',
   	    animSpeed:350,
   	    indentChildren: false,
   		childrenIndenter: '- '
   	});
	
	
	$('.mobile-menu-icon-pro').on('click', function(e){
		e.preventDefault();
		$('#main-nav-mobile').slideToggle(350);
		$("#masthead-pro").toggleClass("active-mobile-icon-pro");
	});
	
	$('#vayvo-progression-search-mobile-button').on('click', function(e){
		e.preventDefault();
		$('#mobile-video-search-header #video-search-header-filtering').slideToggle(350);
		$("#mobile-video-search-header").toggleClass("active");
	});

	


/*
=============================================== 04. SCROLL TO TOP MENU JS  ===============================================
*/
  	// browser window scroll (in pixels) after which the "back to top" link is shown
	$('#pro-scroll-top').hide();
	
    $(window).scroll(function(){
		if ($(this).scrollTop() > 200) {
			$('#pro-scroll-top').fadeIn();
		} else {
			$('#pro-scroll-top').fadeOut();
		}
	 });

	 // Click event to scroll to top
     $('#pro-scroll-top').on('click', function(){
         $('html, body').animate({scrollTop : 0},800);
         return false;
     }); 
	 
	 var offset_scroll = 150;
 
	
	/* Scroll to link inside page */
	$('a.scroll-to-link').on('click', function(){
	  $('html, body').animate({
	    scrollTop: $( $.attr(this, 'href') ).offset_scroll().top - pro_top_offset
	  }, 400);
	  return false;
	});



/*
=============================================== 05. PRELOADER JS  ===============================================
*/
	(function($) {
		var didDone = false;
		    function done() {
		        if(!didDone) {
		            didDone = true;
					$("#page-loader-pro").addClass('finished-loading');
					$("#boxed-layout-pro").addClass('progression-preloader-completed');
		        }
		    }
		    var loaded = false;
		    var minDone = false;
		    //The minimum timeout.
		    setTimeout(function(){
		        minDone = true;
		        //If loaded, fire the done callback.
		        if(loaded)  {  done(); } }, 400);
		    //The maximum timeout.
		    setTimeout(function(){  done();   }, 2000);
		    //Bind the load listener.
		    $(window).load(function(){  loaded = true;
		        if(minDone) { done(); }
		    });
	})(jQuery);


/*
=============================================== 06. STICKY HEADER JS  ===============================================
*/	
	
	/* HEADER HEIGHT FOR SPACING OF ONE PAGE NAV AND STICKY HEADER */
	var pro_top_offset = $('header#masthead-pro').height();  // get height of fixed navbar
		
	var pro_very_top_bar_offset = $('#vayvo-progression-header-top').height();  // get height of fixed navbar
	

  	$('#progression-sticky-header').scrollToFixed({ spacerClass: 'hide-fixed-spacer-mobile' });
	

	$(window).resize(function() {
	   var width_progression = $(document).width();
	      if (width_progression > 959) {
			  			  
				/* STICKY HEADER CLASS */
				$(window).on('load scroll resize orientationchange', function () {
					
				    var scroll = $(window).scrollTop();
				    if (scroll >=  pro_very_top_bar_offset + 1 ) {
				        $("#progression-sticky-header").addClass("progression-sticky-scrolled");
				    } else {
				        $("#progression-sticky-header").removeClass("progression-sticky-scrolled");
				    }
				});
			} else {
				
				$(window).on('load scroll resize orientationchange', function () {
				 	$("#progression-sticky-header").removeClass("progression-sticky-scrolled");
				});
				
			}
		
	}).resize();
	
	

/*
=============================================== 07. SHOW/HIDE SEARCH & Profile  ===============================================
*/	

	$("#progression-studios-header-search-icon").on('click', function(e){
		var $this = $("#progression-studios-header-width");
	    if ($this.hasClass('active-search-icon-pro')) {
	        $this.removeClass('active-search-icon-pro').addClass('hide-search-icon-pro');
	    } else {
	        $this.addClass('active-search-icon-pro');
	    }		
	});
	

	$("#header-user-profile-click").on('click', function(e){
		var $this = $("#header-user-profile");
	    if ($this.hasClass('active')) {
	        $this.removeClass('active').addClass('hide');
	    } else {
	        $this.addClass('active');
	    }		
	});
	
	

	
	$(document).on('click', function(e){
	    if (e.target.id != 'header-user-profile' && !$('#header-user-profile').find(e.target).length) {
	        if ($("#header-user-profile").hasClass('active')) {
	        	$("#header-user-profile").removeClass('active').addClass('hide');
	        }
	    }
		
		
		
	    if (e.target.id != 'progression-studios-header-search-icon' && !$('#progression-studios-header-search-icon').find(e.target).length) {
	        
			if (e.target.id != 'panel-search-progression' && !$('#panel-search-progression').find(e.target).length) {
			if ($("#progression-studios-header-width").hasClass('active-search-icon-pro')) {
	        	$("#progression-studios-header-width").removeClass('active-search-icon-pro').addClass('hide-search-icon-pro');
	        }
			}
	    }
		
	});
	


/*
=============================================== 08. Comments/Social Icons ON/Off  ===============================================
*/	
	
	$("#video-social-sharing-button").click(function() {
		var $this = $("#blog-single-social-sharing-container");
	    if ($this.hasClass('active')) {
	        $this.removeClass('active').addClass('hide');
	    } else {
	        $this.addClass('active');
	    }		
	});
	
	$("#close-social-sharing-skrn").click(function() {
		var $this = $("#blog-single-social-sharing-container");
	    if ($this.hasClass('active')) {
	        $this.removeClass('active').addClass('hide');
	    } else {
	        $this.addClass('active');
	    }		
	});
	
	
	$("#video-post-meta-reviews, #all-reviews-button-progression").click(function() {
		var $this = $("#comment-review-pop-up-fullscreen");
	    if ($this.hasClass('active')) {
	        $this.removeClass('active').addClass('hide');
	    } else {
	        $this.addClass('active');
	    }		
	});
	
	$("#close-pop-up-full-review-skrn, .content-sidebar-section a.button-progression, .rating-click-to-rate-skrn").click(function() {
		var $this = $("#comment-review-pop-up-fullscreen");
	    if ($this.hasClass('active')) {
	        $this.removeClass('active').addClass('hide');
	    } else {
	        $this.addClass('active');
	    }		
	});



/*
=============================================== 09. Comment JS ===============================================
*/
	/* Comment Avatar BG */
	$('.skrn-review-full-avatar').css('background-image', function() {
	    return 'url(' + $(this).find('img').attr('src') + ')'
	 });
	
	
	$('.sidebar-excerpt-more-click').click(function(){
		$(this).find(".sidebar-comment-exerpt-text").hide();
		$(this).find(".read-more-comment-sidebar").hide();
		$(this).find(".sidebar-comment-full").show();
	});
	
	
	$("#comment-review-form-container button.button").click(function() {
		var $this = $("#comment-review-form-container");
	    if ($this.hasClass('active')) {
	        $this.removeClass('active').addClass('hide');
	    } else {
	        $this.addClass('active');
	    }		
	});
	

	
/*
=============================================== 10. Range Slider in Header Search ===============================================
*/	
    $(".rating-range-search-skrn").asRange({
		range: true,
		limit: false,
		tip: true,
    });

});
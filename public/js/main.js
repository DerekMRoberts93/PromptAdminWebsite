jQuery(document).ready(function($){
	//move nav element position according to window width
	moveNavigation();
	$(window).on('resize', function(){
		(!window.requestAnimationFrame) ? setTimeout(moveNavigation, 300) : window.requestAnimationFrame(moveNavigation);
		var width = $(window).width();
		if($('.byu-subnav-trigger').length){
		
		if(width < '1024'){
			$("header").css("background-color", "#1f1f1f");
		}
		else {
			$("header").css("background-color", "#1a3c5e");
		}
	}
		if($('header').hasClass('nav-is-visible')){
			if(width > '1024'){
				$('body').toggleClass('nav-is-visible');
				$('header').toggleClass('nav-is-visible');
				$('.byu-main-nav').toggleClass('nav-is-visible');
				$('.byu-main-content').toggleClass('nav-is-visible');
				$('footer').toggleClass('nav-is-visible');
			}
		}
	});
	$(window).on('load', function(event){
		var width = $(window).width();
		if($('.byu-subnav-trigger').length){
			event.preventDefault();
			$('.byu-main-nav').toggleClass('moves-out');
		}
		if($('.byu-subnav-trigger').length){
		
		if(width < '1024'){
			$("header").css("background-color", "#1f1f1f");
			
		}
		else {
			$("header").css("background-color", "#1a3c5e");
		}
	}
	});

	//mobile version - open/close navigation
	$('.byu-nav-trigger').on('click', function(event){
		event.preventDefault();
		if($('header').hasClass('nav-is-visible')) $('.moves-out').removeClass('moves-out');
		
		$('body').toggleClass('nav-is-visible');
		$('header').toggleClass('nav-is-visible');
		$('.byu-main-nav').toggleClass('nav-is-visible');
		$('.byu-main-content').toggleClass('nav-is-visible');
		$('footer').toggleClass('nav-is-visible');
	});

	//mobile version - go back to main navigation
	$('.go-back').on('click', function(event){
		event.preventDefault();
		$('.byu-main-nav').removeClass('moves-out');
		$('footer').removeClass('moves-out');
	});

	//open sub-navigation
	$('.byu-subnav-trigger').on('click', function(event){
		event.preventDefault();
		$('.byu-main-nav').toggleClass('moves-out');
		$('footer').toggleClass('moves-out');
	});

	

	function moveNavigation(){
		var navigation = $('.byu-main-nav-wrapper');
		var dropdowns = $('.dropList');
  		var screenSize = checkWindowWidth();
        if ( screenSize ) {
        	//desktop screen - insert navigation inside header element
			navigation.detach();
			navigation.insertBefore('.byu-nav-trigger');
			// dropdowns.detach();
			// dropdowns.insertAfter('.ui.compact.menu');

		} else {
			//mobile screen - insert navigation after .byu-main-content element
			navigation.detach();
			navigation.insertAfter('.byu-main-content');
			// dropdowns.detach();
			// dropdowns.insertBefore('ui.simple.dropdow.item');
		}
	}

	function checkWindowWidth() {
		var mq = window.getComputedStyle(document.querySelector('header'), '::before').getPropertyValue('content').replace(/"/g, '').replace(/'/g, "");
		return ( mq == 'mobile' ) ? false : true;
	}
});
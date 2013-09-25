jQuery(function($){

var CORESTUDIO = window.CORESTUDIO || {};

/* ==================================================
   FancyBox
================================================== */

CORESTUDIO.fancyBox = function(){
	if($('.fancybox').length > 0 || $('.fancybox-media').length > 0 || $('.fancybox-various').length > 0){
		
		$(".fancybox").fancybox({				
				padding : 0,
				beforeShow: function () {
					this.title = $(this.element).attr('title');
					this.title = '<h4>' + this.title + '</h4>' + '<p>' + $(this.element).parent().find('img').attr('alt') + '</p>';
				},
				helpers : {
					title : { type: 'inside' },
				}
			});
			
		$('.fancybox-media').fancybox({
			openEffect  : 'none',
			closeEffect : 'none',
			helpers : {
				media : {}
			}
		});
	}
}


/* ==================================================
   Contact Form
================================================== */

CORESTUDIO.contactForm = function(){
	$("#submit").on('click',function() {
		$contact_form = $('#contact-form');
		
		var fields = $contact_form.serialize();
		
		$.ajax({
			type: "POST",
			url: "php/contact.php",
			data: fields,
			dataType: 'json',
			success: function(response) {
				
				if(response.status){
					$('#contact-form input').val('');
					$('#contact-form textarea').val('');
				}
				
				$('#response').empty().html(response.html);
			}
		});
		return false;
	});
}


$(document).ready(function(){

/* ==================================================
   INIT BUILT FUNCTIONS
================================================== */
	CORESTUDIO.fancyBox();
	CORESTUDIO.contactForm();
		
/* ==================================================
   ISOTYPE PROJECTS
================================================== */
	if($('#projects').length > 0){
	var $container = $('#projects');
	$container.isotope({
		  // options
		  animationEngine: 'best-available',
		  itemSelector : '.item-thumbs',
		  layoutMode : 'fitRows'
		});
	};
	  
/* ==================================================
   FLEXSLIDERS
================================================== */
	$('#slideshow').flexslider({
		animation: "fade",
		directionNav: true,
		controlNav: false,
		animationLoop: true,
		start: function(slider){
			$('body').removeClass('loading');
		}
	});
	
	$('#services-slider').flexslider({
		animation: "fade",
		directionNav: false,
		controlNav: false
	});
	
	$('#blog-slider').flexslider({
		controlNav: false,            
		directionNav: true,
		animation: "slide"
	});
	
/* ==================================================
   MOBILE MENU
================================================== */
	$(".icon-nav").click(function() {
		$(".nav-link").slideToggle();
		return false;
	});
	$(".navigation ul li a").click(function() {
		$(".nav-link").slideToggle();
	});
	function checkWindowSize() {
	if ( $(window).width() < 960 ) {
		$('.navigation').addClass('nav-link');
		$('.navigation').css('display','none');
	}
	else {
		$('.navigation').removeClass('nav-link');
		$('.navigation').css('display','block');
		}
	}
	if ( $(window).width() < 960 ) {
		$('.navigation').addClass('nav-link');
	}
	else {
		$('.navigation').removeClass('nav-link');
	}
	$(window).resize(checkWindowSize);

	$('.logo a, .slideanchor').click(function(){
		$('.navigation li').removeClass('active');
	});
	var wheight = $(window).height();
	$(".showcase, .showcase #slideshow, #slideshow .slides li").css({height:wheight});	
		
	Modernizr.load([
	{
		test: Modernizr.placeholder,
		nope: 'js/placeholder.js', 
		complete : function() {
				if (!Modernizr.placeholder) {
						Placeholders.init({
						live: true,
						hideOnFocus: false,
						className: "yourClass",
						textColor: "#999"
						});    
				}
		}
	}
	]);
	
});
/* ==================================================
   WINDOWS RESIZE FUNCTIONS
================================================== */
	$(window).resize(function() {
		var wheight = $(window).height();
		$(".showcase, .showcase #slideshow, #slideshow .slides li").css({height:wheight});		
	});
/* ==================================================
   SCROLL TOP
================================================== */
	$('#scrollTop').hide();
	$(window).scroll(function(){
		if($(this).scrollTop() > 100){
			$('#scrollTop').fadeIn();
		}else{
			$('#scrollTop').fadeOut();
		}
	});
});
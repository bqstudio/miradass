jQuery.noConflict();
jQuery(document).ready(function($){

	AOS.init({
		duration: 800,
		easing: 'ease-in-sine',
	  });

	$(window).scroll(function(){
		$(window).scrollTop() >= 5 ? $('body').addClass('scrolled') : $('body').removeClass('scrolled');
	});

	$('a[href^="#"]').on('click', function(e){
		e.preventDefault();
		var $href   =   $(this).attr('href');
		$($href).length && $($href).scrollTo(( $(this).data('scrolldiff') ? $(this).data('scrolldiff') : 0 ), $(this).data('duration'));
		return false;
	});

	$(".js-go-top").on('click', function() {
		$([document.documentElement, document.body]).animate({
			scrollTop: ($("body").offset().top)
		}, 400);
	});


	$('.responsive__btn').on('click',() => $('body').toggleClass('menu-responsive-open') );
	$('.js-open-block').click(function () {
		$('.site-menu').fadeToggle();
	});

	$('.buttom_suscribe').on('click', function(){
		$('.popup').fadeIn();
	});

	$('.close_popup').on('click', function(){
		$('.popup').fadeOut();
	});

	$('.play-button').click(function(){
		$(this).hide();
		$(this).parent().find('.image_placeholder').hide();
	  	$(this).parent().find('video').get(0).play();
		$(this).parent().find('.controls').show();
	});
	$('.pause').click(function(){
		$(this).parent().hide();
		$(this).parent().parent().find('video').get(0).pause();
		$(this).parent().parent().find('.play-button').show();
	  	$(this).parent().parent().find('.image_placeholder').show();
	});
});
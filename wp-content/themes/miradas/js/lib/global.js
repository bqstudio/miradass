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

});
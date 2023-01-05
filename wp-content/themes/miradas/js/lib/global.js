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
		const el = $($(this).attr('href'));
	    el.length && $('html, body').animate({ scrollTop: el.offset().top - 150}, 500);
		return false;
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

	$('.play-button').on('click', function(){
		$(this).hide();
		$(this).parent().find('.image_placeholder').hide();
	  	$(this).parent().find('video').get(0).play();
		$(this).parent().find('.controls').show();
	});
	$('.pause').on('click', function(){
		$(this).parent().hide();
		$(this).parent().parent().find('video').get(0).pause();
		$(this).parent().parent().find('.play-button').show();
	  	$(this).parent().parent().find('.image_placeholder').show();
	});

	$('.js-open-equipo').click(function(e){
        e.preventDefault();
        let elem = $(this);
        let elem_id = elem.attr('data-id');
        let popup_equipo = $('.popup_equipo[data-id="'+ elem_id +'"]');

        $('.popup_equipo').removeClass('js-active');
        popup_equipo.addClass('js-active');
        $('body').addClass('js-popup-active');
        $('.popup-fade').fadeIn();

		return false;
    });

	$('.close_popup').click(() => {$('body').removeClass('js-popup-active').find('.popup_equipo').removeClass('js-active'); $('.popup-fade').fadeOut();});

	//$(document).mouseup(e => ( !$('.popup_equipo').is(e.target) && $('.popup_equipo').has(e.target).length === 0 ) && $('.close_popup').click());

	$(document).keyup(e => ( e.which == 27 ) && $('.close_popup').click());

	$(document).on('click', 'a[href^="#"]', function (event) {
		event.preventDefault();
	});

	$('html, body').animate({
		scrollTop: $($.attr(this, 'href')).offset().top
	}, 500)
});
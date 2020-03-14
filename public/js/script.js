$(document).ready(function() {
	$('.novelty__item-slide_pic').on('click', function(){
		let $this_pic = $(this);
		let $this_src = $this_pic.attr('src');
		let $target_pic = $('.novelty__item-main_pic').attr('src');
		$('.novelty__item-main_pic').attr('src', $this_src);
		$this_pic.attr('src', $target_pic);
    });
    
// 	$('[href="#novelty-popap"]').on('click', function(){
// 		let $card = $(this);
// 		let $nameG =  $('[data-name]', $card).html();
// 		let $nameA =  $('[data-album]', $card).html();
// 		let $alt_pic = $('[data-photo_alt]', $card).html();
// 		let $pic1 = $('[data-photo_main]', $card).html();
// 		let $pic2 = $('[data-photo_2]', $card).html();
// 		let $pic3 = $('[data-photo_3]', $card).html();
// 		let $pic4 = $('[data-photo_4]', $card).html();
// 		let $type = $('[data-type]', $card).html();
// 		let $label = $('[data-label]', $card).text();
// 		let $country = $('[data-country]', $card).html();
// 		let $label_disc = $('[data-label_disc]', $card).html();
// 		let $envelope_status = $('[data-envelope_status]', $card).html();
// 		let $plate_status = $('[data-plate_status]', $card).html();
// 		let $price = $('[data-price]', $card).html();

// 		$(".novelty_popap-title").text($nameG);
// 		$(".novelty_popap-album").text($nameA);
// 		$(".novelty_popap-type span").text($type);
// 		$(".novelty_popap-label span").text($label);
// 		$(".novelty_popap-country span").text($country);
// 		$(".novelty_popap-label_disc span").text($label_disc);
// 		$(".novelty_popap-envelope_status span").text($envelope_status);
// 		$(".novelty_popap-plate_status span").text($plate_status);
// 		$(".novelty_popap-cost").text($price);
// 		$(".novelty_popap-img-1").attr('src', $pic1).attr('alt', $alt_pic);
// 		$(".novelty_popap-img-2").attr('src', $pic2).attr('alt', $alt_pic);
// 		$(".novelty_popap-img-3").attr('src', $pic3).attr('alt', $alt_pic);
// 		$(".novelty_popap-img-4").attr('src', $pic4).attr('alt', $alt_pic);
// 	});

// 	$('.novelty_popap-img-second').on('click', function(){
// 		let $this_pic = $(this);
// 		let $this_src = $this_pic.attr('src');
// 		let $target_pic = $('.novelty_popap-img-main').attr('src');
// 		$('.novelty_popap-img-main').attr('src', $this_src);
// 		$this_pic.attr('src', $target_pic);
// 	});
	

	
// 	if ( $(window).width() > 1025 ) {
// 		 $('.novelty_popap-img-main').lightzoom({
//          zoomPower   : 5,    //Default
//          glassSize   : 150,  //Default
//     	 });
// 	}
		


});

$(function () {

	/* Inits */

	initFancybox();
	topMenu();
	initScroll();

	/* Functions */

	function initFancybox() {
		if (!$('.fancybox').length) return;

		$(document).on('fancybox.init', '.fancybox', function () {
			var
			defaults = {
				width: 'auto',
				autoSize: false,
				autoHeight: true,
				minWidth: 320,
				padding: 0,
				margin: 0,
				helpers: {
					media: {},
					overlay: {
						locked: false
					}
				},
				tpl: {
					closeBtn: '<a title="Закрыть" class="fancybox-item fancybox-close" href="javascript:;"></a>',
					next: '<a title="Далее" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
					prev: '<a title="Назад" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
				}
			},
			$el = $(this),
			group = $el.attr('data-fancybox-group'),
			options = eval('[' + $el.data('fancybox-options') + ']')[0]
			;

			if (group) $el = $('[data-fancybox-group="' + group + '"]');

			$.extend(defaults, options);

			$el.fancybox(defaults);
		});

		$('.fancybox').trigger('fancybox.init');
	}
	
	function topMenu(){

		let $button = $('#menu-btn');

		$button.on('click', function(e) {
		e.preventDefault();
		if ($button.hasClass('opened')) {

			$button.removeClass('opened');
			$button.addClass('closed');
		} else {
			$button.removeClass('closed');
			$button.addClass('opened');
		}
		});
		$('#menu-btn').click(function(){
			$('.header__m-nav').toggleClass("d-show h-show");
		});

		$('.header__m-nav-link').on('click', function () {
			$('.header__m-nav').toggleClass("d-show h-show");
			$button.removeClass('opened');
			$button.addClass('closed');
		});

	};

	function initScroll() {
		if (!$('.scroll').length) return;

		$(document).on('click scroll.init', '.scroll', function(event) {
			event.preventDefault();
			$.fancybox.close();

			var
			hrefId = $(this).attr('href') || $(this).data('href'),
			posTop = $(hrefId).offset().top - $('.header').height() + 0.5
			;
			$('html, body').animate({scrollTop: posTop}, 600);
		});
	}

});




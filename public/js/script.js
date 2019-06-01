$(function () {
	/* Inits */
	initCarousel();
	initFancybox();
	scrollNovelty();
	topMenu();

	/* Functions */

	function initFancybox() {
		if (!$('.fancybox').length) return;

		$(document).on('fancybox.init', '.fancybox', function () {
			var
			defaults = {
				width: 'auto',
				autoSize: false,
				autoHeight: true,
				// maxWidth: 1180,
				minWidth: 320,
				// autoResize: true,
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


	/* author: http://kenwheeler.github.io/slick/ | source: https://cdnjs.com/libraries/slick-carousel */
	/* Ко всем блокам с классом slick-carousel инициализируется карусель. Параметры указываем в атрибуте data-slick-options блока, data-slick-options="{responsive: [{breakpoint: 768,settings: {slidesToShow: 4,slidesToScroll: 4}},{breakpoint: 992,settings: {slidesToShow: 5,slidesToScroll: 5}}]}" */

	/*

	function initCarousel() {

		if (!$('div.slick-carousel').length) return;

		$(document).on('carousel.init', 'div.slick-carousel', function(event, slick) {

			var
			$carousel = $(this),
			defaults = {
				infinite: true,
				rows: 1,
				arrows: true,
				dots: true,
				slidesToShow: 5,
				slidesToScroll: 5,
				mobileFirst: true,
				lazyLoad: 'ondemand',

				nextArrow: '<button type="button" class="slick-next"></button>',
				prevArrow: '<button type="button" class="slick-prev"></button>'
			},
			options = {}
			;

			if ( $carousel.data('slick-options') ) {
				options = eval('[' + $carousel.data('slick-options') + ']')[0];

				$.extend(defaults, options);
			}

			$carousel.slick(defaults);
		});

		$('div.slick-carousel').trigger('carousel.init');
	}

	*/

	function scrollNovelty(){
	    $('.link-novelty').on('click', function(e){
	        $('html,body').stop().animate({ scrollTop: $('#novelty').offset().top }, 1000);
	        e.preventDefault();
	    });
	}

	function initCarousel(){
		$('.slick-novelty').slick({
			dots: true,
			dotsClass: "my-dots",
			centerMode: false,
			infinite: true,
			speed: 1500,
			slidesToShow: 4,
			slidesToScroll: 1,
			lazyLoad: 'ondemand',
			arrows: false,
			/*nextArrow: '<div class="slick-next">&#8669;</div>',
			prevArrow: '<div class="slick-prew">&#8668;</div>',*/	
			responsive: [
		    {
		      breakpoint: 1200,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 800,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        centerMode: true,
		 		centerPadding: '5px'
		      }
		    }
		  	] 
		});
	}


	function topMenu(){

		let $button = $('#menu-btn');

		$button.on('click', function(e) {
		e.preventDefault();
		if ($button.hasClass('open')) {

			$button.removeClass('open');
			$button.addClass('close');
		} else {
			$button.removeClass('close');
			$button.addClass('open');
		}
		});
		$('#menu-btn').click(function(){
			$('.header__m-nav').toggleClass("d-show a-show");
		});
	};


});



/*$(function() {
    let showMoreBtn = $('.novelty_show-more');
    showMoreBtn.on('click', function () {
        $('.novelty_block-item').toggleClass('block-closed block-opened');
    });
});*/

$(document).ready(function() {

	$('[href="#novelty-popap"]').on('click', function(){
		let $card = $(this);
		let $nameG =  $('[data-name]', $card).html();
		let $nameA =  $('[data-album]', $card).html();
		let $alt_pic = $('[data-photo_alt]', $card).html();
		let $pic1 = $('[data-photo_main]', $card).html();
		let $pic2 = $('[data-photo_2]', $card).html();
		let $pic3 = $('[data-photo_3]', $card).html();
		let $pic4 = $('[data-photo_4]', $card).html();
		let $type = $('[data-type]', $card).html();
		let $label = $('[data-label]', $card).html();
		let $country = $('[data-country]', $card).html();
		let $label_disc = $('[data-label_disc]', $card).html();
		let $envelope_status = $('[data-envelope_status]', $card).html();
		let $plate_status = $('[data-plate_status]', $card).html();
		let $price = $('[data-price]', $card).html();

		$(".novelty_popap-title").text($nameG);
		$(".novelty_popap-album").text($nameA);
		$(".novelty_popap-type span").text($type);
		$(".novelty_popap-label span").text($label);
		$(".novelty_popap-country span").text($country);
		$(".novelty_popap-label_disc span").text($label_disc);
		$(".novelty_popap-envelope_status span").text($envelope_status);
		$(".novelty_popap-plate_status span").text($plate_status);
		$(".novelty_popap-cost").text($price);
		$(".novelty_popap-img-1").attr('src', $pic1).attr('alt', $alt_pic);
		$(".novelty_popap-img-2").attr('src', $pic2).attr('alt', $alt_pic);
		$(".novelty_popap-img-3").attr('src', $pic3).attr('alt', $alt_pic);
		$(".novelty_popap-img-4").attr('src', $pic4).attr('alt', $alt_pic);
	});

	$('.novelty_popap-img-second').on('click', function(){
		let $this_pic = $(this);
		let $this_src = $this_pic.attr('src');
		let $target_pic = $('.novelty_popap-img-main').attr('src');
		$('.novelty_popap-img-main').attr('src', $this_src);
		$this_pic.attr('src', $target_pic);
	});
	

	
	if ( $(window).width() > 1025 ) {
		 $('.novelty_popap-img-main').lightzoom({
         zoomPower   : 5,    //Default
         glassSize   : 150,  //Default
    	 });
	}
		


});

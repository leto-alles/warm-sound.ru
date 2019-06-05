$(function () {
	/* Inits */
	initCarousel();
	initFancybox();
	scrollNovelty();
	scrollVinyl();
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
	function scrollVinyl(){
	    $('.link-vinyl').on('click', function(e){
	        $('html,body').stop().animate({ scrollTop: $('#vinyl').offset().top }, 1000);
	        e.preventDefault();
	    });
	}

	function initCarousel(){
		$('.slick-novelty').slick({
			dots: true,
			dotsClass: "my-dots",
			centerMode: false,
			infinite: true,
			speed: 200,
			slidesToShow: 4,
			slidesToScroll: 1,
			lazyLoad: 'ondemand',
			arrows: false,
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



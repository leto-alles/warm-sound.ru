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
		let $label = $('[data-label]', $card).text();
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

//=require header_title/script.js
$(function(){
	initReviews();
	changeTab();
	scrollUpTabs();
	toggleTab();
	addClassVinyl();

	function changeTab() {
		$('.vinyl_tab').on('click', function(){
			$('.vinyl_tab').removeClass('tab_active');
	  		$(this).addClass('tab_active');
		});
	}
	function toggleTab(){
		$('.vinyl_tab_ru').on('click', function(){
			$('.vinyl_block').removeClass('vinyl_block_active');
			$('#vinyl_block_ru').addClass('vinyl_block_active');
		});
		$('.vinyl_tab_en').on('click', function(){
			$('.vinyl_block').removeClass('vinyl_block_active');
			$('#vinyl_block_en').addClass('vinyl_block_active');
		});
	}

	function initReviews(){
		$('.more__link').on('click', function(event) {
			event.preventDefault();

			var
			$container = $(this).closest('div.container'),
			$hidden_items = $('.hidden-item', $container)
			;

			if(!$hidden_items.length) {
				$(this).hide();
				return;
			}

			$hidden_items.slice(0, 3).slideUp().removeClass('hidden-item').css('display', 'flex');
		});
	}

	function addClassVinyl(){
		$('#vinyl_block_ru .vinyl_block-item').each(function(i) {
		    if ( i > 2 ) {
		       $(this).addClass('hidden-item');
		    }
		});
		$('#vinyl_block_en .vinyl_block-item').each(function(i) {
		    if ( i > 2 ) {
		       $(this).addClass('hidden-item');
		    }
		});

	}

	function scrollUpTabs(){
		$('.vinyl_btn-up').on('click', function(e){
	        $('html,body').stop().animate({ scrollTop: $('#vinyl_tab-change').offset().top }, 1000);
	        e.preventDefault();
			}
		);
	}
});

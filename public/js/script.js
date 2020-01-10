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




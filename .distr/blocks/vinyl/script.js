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

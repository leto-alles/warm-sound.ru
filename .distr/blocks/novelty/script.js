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
			let $pic1 = $('[data-photo_main]', $card).html();
			let $pic2 = $('[data-photo_2]', $card).html();
			let $pic3 = $('[data-photo_3]', $card).html();
			let $pic4 = $('[data-photo_4]', $card).html();
			

			$(".novelty_popap-title").text($nameG);
			$(".novelty_popap-album").text($nameA);
			$(".novelty_popap-img-1").attr('src', $pic1);
			$(".novelty_popap-img-2").attr('src', $pic2);
			$(".novelty_popap-img-3").attr('src', $pic3);
			$(".novelty_popap-img-4").attr('src', $pic4);
	});
});

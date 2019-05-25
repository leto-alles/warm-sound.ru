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
		

		$(".novelty_popap-title").text($nameG);
		$(".novelty_popap-album").text($nameA);
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
});

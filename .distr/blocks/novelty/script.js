/*$(function() {
    let showMoreBtn = $('.novelty_show-more');
    showMoreBtn.on('click', function () {
        $('.novelty_block-item').toggleClass('block-closed block-opened');
    });
});*/

$(document).ready(function() {


		$('[href="#novelty-popap"]').on('click', function(){
			let $card = $(this);
			let nameC =  $('[data-name]', $card).html();
			console.log(nameC);
			$(".novelty_popap-title").text(nameC);



	});
});

/*$(function() {
    let showMoreBtn = $('.novelty_show-more');
    showMoreBtn.on('click', function () {
        $('.novelty_block-item').toggleClass('block-closed block-opened');
    });
});*/

$(document).ready(function() {


		$('[href="#novelty-popap"]').on('click', function(){
			var $card = $(this);
			var $popap = $('#novelty-popap');
			var nameC =  $('[data-name]', $card).html();
			console.log(nameC);


			$('.novelty_popap-item.pp', $popup).html(name);
		


	});
});

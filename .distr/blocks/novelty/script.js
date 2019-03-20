$(function() {
    let showMoreBtn = $('.vinyl_show-more');
    showMoreBtn.on('click', function () {
        $('.novelty_block-item').toggleClass('block-closed block-opened');
    });
});
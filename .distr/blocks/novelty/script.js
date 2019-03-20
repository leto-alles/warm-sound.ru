$(function() {

    let showMoreBtn = $('.speakers__show-more-btn');

    showMoreBtn.on('click', function () {
        $('.speakers__panel').addClass('speakers__panel_opened');
        $(this).closest('.speakers__show-more').hide();
    });

});


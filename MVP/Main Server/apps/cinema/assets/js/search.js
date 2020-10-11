$('.search').keyup(function() {
    search_table($(this).val());
    if ($(this).val() !== '') {
        $('.promo_block').hide();
    } else {
        $('.promo_block').show();
    }
});

function search_table(value) {
    $('.film_card').each(function() {
        var found = 'false';
        $(this).each(function() {
            if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0) {
                found = 'true';
            }
        });
        if (found == 'true') {
            $(this).show();
            $('.empty_block').hide();
        } else {
            $(this).hide();
            $('.empty_block').show();
        }
    });
}
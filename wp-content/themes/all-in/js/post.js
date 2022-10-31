jQuery.noConflict();

jQuery(document).ready(function ($) {

    jQuery('.links_filter li a').on('click keypress', function(e){
        e.preventDefault();
        $('.links_filter li a').removeClass('js-active');
        $('form#filter').attr('data-page', 1);
        $(this).addClass('js-active');
        $('form#filter').submit();
        return false;
    });

    $('form#filter').submit(function(e){
        e.preventDefault();
        $('#result').addClass('js-loading');
        const year = $('.links_filter li a.js-active').text();
        const page = $(this).attr('data-page');

        jQuery.ajax({
            type: "post",
            url: ajax_var.url,
            method : 'POST',
            data: {
                action: ajax_var.action, nonce: ajax_var.nonce, year:year, page:page
            },
            success : function(response){
                if(response.is_last) {
                    $('.js-load-more').hide();
                }else {
                    $('.js-load-more').show();
                }
                $('form#filter').attr('data-page', response.next_page);
                console.log(page);
                if(page == 1) {
                    $('#result').removeClass('js-loading').html(response.content);
                }else {
                    $('#result').removeClass('js-loading').append(response.content);
                }
            },
            error : function(response){ console.log(response.content) }
        })
        return false;
    });
    $('form#filter').submit();
});
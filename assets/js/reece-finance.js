$(document).ready(function(){
    $('.file-download .nav a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $('.carousel').carousel({
        interval: false
    }).each(function(){ //hide controls if only 1 slide
        var items = $(this).find('.item').length;
        if (items === 1) {
            $(this).find('.carousel-control').hide();
        }
    });

    //if less than 3 sections per slide, center the section using appropriate column offset
    $('.carousel .item').each(function(){
        var items = $(this).children('div');
        if (items.length === 2) {
            items.addClass('offset2');
        } else if (items.length <= 1) {
            items.addClass('offset4');
        }
    });


});
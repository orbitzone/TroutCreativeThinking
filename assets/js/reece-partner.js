$(document).ready(function(){
    //Carousel
    $('#carousel-partner').carousel({
        interval: 3000,
        pause: 'hover'
    });

    //Duplicate collapsible brand details for mobile - because of different placement in the html hierachy
    $('.brand-expand').each(function(){
        var name = $(this).data('brand-number').replace('brand-expand', '');
        $(this).clone().addClass('hidden-desktop').insertAfter(".brand"+name);
    });

    //Expand brand details
    $(".brand a").click(function(e){
        e.preventDefault();
        $('.brand-expand').hide().removeClass('expanded');
        var target = $(this).attr('href').replace('#', "");
        $('[data-brand-number='+target+']').show().addClass('expanded');
    });

    //Close icon to close brand expand
    $(".brand-close").click(function(){
        $('.brand-expand').removeClass('expanded');
    });


});

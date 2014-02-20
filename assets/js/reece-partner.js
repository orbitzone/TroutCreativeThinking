$(document).ready(function(){
    //Carousel
    $('#carousel-partner').carousel({
        interval: 3000,
        pause: 'hover'
    });

    $(".brand a").click(function(e){
        e.preventDefault();
        $('.brand-expand').removeClass('expanded');
        var target = $(this).attr('href');
        $(target).addClass('expanded');
    });
    $(".brand-close").click(function(){
        $('.brand-expand').removeClass('expanded');
    });

    // $('.brand-expand').each(function(){
    
    //     //$(this).clone().insertAfter("#"+parent+"-parent");
    // });
});

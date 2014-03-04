$(document).ready(function(){

    $('a[href="#contact-form"]').click(function(e){
        $(".contact-form").slideDown();
        $('html,body').animate({scrollTop: $(".contact-form").offset().top-240},'slow');
        
        var topic = $(this).parent().siblings('h4').html();
        $('#topic option').each(function(){
            if ($(this).html() === topic) {
                $(this).prop('selected', true);
            }
        });
        e.preventDefault();

    });
});

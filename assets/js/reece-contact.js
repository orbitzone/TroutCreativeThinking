$(document).ready(function(){

    //Click a link on the contact page and expand 
    //the contact form with the appropriate 'topic' selected
    $('a[href="#contact-form"]').click(function(e){
        $(".contact-form").slideDown();
        $.placeholder.shim();
        $('html,body').animate({scrollTop: $(".contact-form").offset().top-240},'slow');
        
        var topic = $(this).parent().siblings('h4').html();
        $('#topic option').each(function(){
            if ($(this).html() === topic) {
                $(this).prop('selected', true);
            }
        });
        //styled dropdown box
        $('.selectricItems li').each(function(){
            if ($(this).html() === topic) {
                $(this).click();
            }
        });
        e.preventDefault();
    });

    $('a[href="#headOffice"]').click(function(e){
        $('html,body').animate({scrollTop: $("#headOffice").offset().top-240},'slow');
        e.preventDefault();
    });

    $('select').selectric();
});

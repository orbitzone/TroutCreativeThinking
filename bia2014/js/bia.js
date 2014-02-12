$(document).ready(function(){


    if($("form .feature-box input[type='radio']:checked").length){
        $("form .row-fluid").show();
        $("form .btn").show();
    }
    $("form .feature-box input[type='radio']").on("click.radio", function(){
        $("form .row-fluid").show();
        $("form .btn").show();
    });
    
    $('.box-nav-overlay').click(function(e){
        e.preventDefault();
        var NavContainer = $(this).parents('.box-nav-container');
        if (NavContainer.hasClass('open')) {
            NavContainer.removeClass('open').addClass('closed');
        } else {
            NavContainer.removeClass('closed').addClass('open');
        }
    });
    
    // Initialise the media element player
    if ($('video').length > 0) {
        $('video').mediaelementplayer({
            enableAutosize: false
        });
    }
    
    // Setup isotope
    var $container = $('.masonry-container');
    if ($container.length > 0) {
        $container.imagesLoaded(function(){
            $container.isotope({
                itemSelector: '.masonry-item',
                masonry: {
                    columnWidth: 10,
                    gutterWidth: 5
                },
                animationEngine: 'jquery'
            });
        });
    }
    
    
    // Setup fancybox
    if ($('a.fancybox').length > 0 ){
        $("a.fancybox").fancybox({
            title: null,
            maxWidth: 800,
            maxHeight: 640
        });
    }
    
    // Perform smooth scrolling on anchor links
    function filterPath(string) {
        return string
        .replace(/^\//,'')
        .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
        .replace(/\/$/,'');
    }
    var locationPath = filterPath(location.pathname);
 
    $('a[href*=#]').each(function() {
        var thisPath = filterPath(this.pathname) || locationPath;
        if (  locationPath == thisPath
            && (location.hostname == this.hostname || !this.hostname)
            && this.hash.replace(/#/,'') ) {
            var $target = $(this.hash), target = this.hash;
            if (target && this.hash != '#mainNav' && this.hash != '#awardSubNav') {/* Adding exception for nav accordion */
                $(this).click(function(event) {
                    var targetOffset = $target.offset().top;
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: targetOffset
                    }, 800, function() {
                        location.hash = target;
                    });
                });
            }
        }
    });
    
    
    // Registration Form Functions
    $('input.form-switcher').click(function(){

        var selectedVal = $(this).val();
        var $targetObj = $('#'+selectedVal+'Fields');
        $('.feature-box label').removeClass('active');
        $(this).parent('label').addClass('active');
        //console.log($targetObj);
        if (!$targetObj.is(':visible')) {
            $('.sub-form-wrapper').hide();
            $targetObj.show();
        }
    });

    $(".faq h4 a").click(function(event)
    {
        event.preventDefault();
    });    
 


});

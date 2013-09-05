
+function ($) { 

     //TODO: Rewrite this to be more modular and namespace

    "use strict";

    $(window).on("load resize", function() {

        if (matchMedia('(min-width: 767px)').matches) {
            $('[data-resize-group]').each(function() {
                var maxHeight = 0;
                $(this).find('[data-resize="height"]').each(function() {
                    $(this).css('min-height', '0px');    
                    if ($(this).innerHeight() > maxHeight) maxHeight = $(this).innerHeight();
                });
                $(this).find('[data-resize="height"]').css('min-height', maxHeight+'px');
            }); 
        }
        else {
            $('[data-resize-group]').each(function() {
                console.log($(this));
                $(this).find('[data-resize="height"]').each(function() {
                    $(this).css('min-height', '0px');    
                });
            });
        }
 
    });  

}(window.jQuery);
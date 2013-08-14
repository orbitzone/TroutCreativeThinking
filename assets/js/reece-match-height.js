
+function ($) { "use strict";

//     var MatchHeight = function (element, options) {
//         this.$element    = $(element);
//         this.$indicators = this.$element.find('.carousel-indicators');
//     }  

//     var old = $.fn.carousel

//     $.fn.matchHeight = function (option) {

//         }     

//     $(window).on('load resize', function (e) {
//         var groupsCol = new Array();

//         $('[data-resize="height"]').each(function () {

//             groupsCol[$(this).attr('data-group')] = ( typeof x != 'undefined' && x instanceof Array ) ? x : [];

//             //console.log(groupsCol);

//             groupsCol[$(this).attr('data-group')].push($(this));
//             //groupsCol[$(this).attr('data-group')].els.push($(this));
//         });

//         console.log(groupsCol);

//         var groups = new Array();

//         for (var i = 0; i < groupsCol.length; i++) {
//             //console.log(groupsCol[i]);
//         }

//     });

    $(window).on("load", function() {
        //Todo: Create a better data-api plugin for this
        var maxHeight = 0;

        $('[data-resize-group]').each(function() {
            $(this).find('[data-resize="height"]').each(function() {
                if ($(this).innerHeight() > maxHeight) maxHeight = $(this).innerHeight();
            });
            $(this).find('[data-resize="height"]').css('min-height', maxHeight+'px');
        });  
    });  

}(window.jQuery);
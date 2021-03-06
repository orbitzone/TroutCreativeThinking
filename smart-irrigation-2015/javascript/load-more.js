/* 

Load More jQuery Plugin

*/

(function ( $ ) {
 
  $.fn.loadMore = function( options ) {
    // This is the easiest way to have default options.
    var settings = $.extend({
      // These are the defaults.
    }, options );
    bodyScrollOffset = 0;
    var methods = {
      init:function (){
        methods.loadMoreListeners();
        methods.loadClicked();
      },
      loadMoreListeners: function (){
        $(options.loadBtn).click(methods.loadClick);
        methods.start = 0;
      },
      loadClick: function(e){
        e.preventDefault();
        methods.loadClicked();
        bodyScrollOffset = $(window).scrollTop();
      },
      loadClicked: function (){
        parameters = {start: methods.start};
        $.getJSON(options.url,parameters,function(data){
          var source = $(options.sourceTemplate).html();
          var template = Handlebars.compile(source);
          var html = template(data);
          methods.start = data.results.length + methods.start ;
          $(options.resultWrap).append(html);
          $('html, body').animate({scrollTop: bodyScrollOffset}, 500);
          if (data.remaining<=0){
            $(options.loadBtn).remove();
          }
          if(options.callback){
            options.callback();
          }
        })
      }
    };
    methods.init();
  };
 
}( jQuery ));


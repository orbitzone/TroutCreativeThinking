// Simple JavaScript Templating
// John Resig - http://ejohn.org/ - MIT Licensed
(function(){
  var cache = {};
 
  this.tmpl = function tmpl(str, data){
    // Figure out if we're getting a template, or if we need to
    // load the template - and be sure to cache the result.
    var fn = !/\W/.test(str) ?
      cache[str] = cache[str] ||
        tmpl(document.getElementById(str).innerHTML) :
     
      // Generate a reusable function that will serve as a template
      // generator (and which will be cached).
      new Function("obj",
        "var p=[],print=function(){p.push.apply(p,arguments);};" +
       
        // Introduce the data as local variables using with(){}
        "with(obj){p.push('" +
       
        // Convert the template into pure JavaScript
        str
          .replace(/[\r\t\n]/g, " ")
          .split("<%").join("\t")
          .replace(/((^|%>)[^\t]*)'/g, "$1\r")
          .replace(/\t=(.*?)%>/g, "',$1,'")
          .split("\t").join("');")
          .split("%>").join("p.push('")
          .split("\r").join("\\'")
      + "');}return p.join('');");
   
    // Provide some basic currying to the user
    return data ? fn( data ) : fn;
  };
})();

$(document).ready(function(){

        window.ajaxContentLoader = {};

        //Load ajax data to be used in a template
        window.ajaxContentLoader = {

            $el: $('.more-products-button'),
            offset : 8,

            init: function() {
                this.$el.on("click", $.proxy(this.requestData, this));
            },

            requestData: function (event) {
                event.preventDefault();
                var instance = this,
                    $clickedEl = $(event.target);
                instance.offset += 4;
                jQuery.ajax({
                    type: "POST",
                    url: "/includes/ajax/ajax.php",
                    data: {
                        offset: instance.offset
                    },
                    dataType: "JSON",
                    success: function (data) {
                        instance.createMarkup(data, $clickedEl);
                    }
                });
            },

            //Templating function
            createMarkup: function (event, data, $clickedEl) {
                event.preventDefault();
                var productBlockTemplate = tmpl("product_block_template"),
                    productBlockWrap = $('<div style="display: none;" class="row-fluid"/>'),
                    html = "";

                for ( var i = 0; i < data.length; i++ ) {
                    html += productBlockTemplate( data[i] );
                }

                productBlockWrap = productBlockWrap.append(html);
                $clickedEl.before(productBlockWrap);
                productBlockWrap.slideDown();
            }
        };

        window.ajaxContentLoader.init();

});
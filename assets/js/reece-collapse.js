  
!function ($) {

     //TODO: Rewrite this to be more modular and namespace

    //Help the bootstrap API by appending and removing active classes on the currently open accordian
    window.collapseHelper = {

        $el: $(".accordion"),

        init: function() {
            this.$el.on("show", $.proxy(this.appendActiveAccordClass, this)); 
            this.$el.on("hide", $.proxy(this.removeActiveAccordClass, this)); 
        },

        appendActiveAccordClass: function(event) {
            $(event.target).prev('.accordion-heading').addClass('active');
        },

        removeActiveAccordClass: function(event) {        
            $(event.target).prev('.accordion-heading').removeClass('active');
        }
    } 

    collapseHelper.init();     

}(window.jQuery); 
(function(){

    window.reece = window.reece || {};

    window.reece.products = {};

    //Load ajax data to be used in a template
    window.reece.products = {

        $el: $('#filter-form'),
        $content: $('#products-content'),

        init: function() {
            this.$checkboxes = this.$el.find('input[type="checkbox"]');
            this.$checkboxes.on("change.downplayProducts", $.proxy(this.downplayContent, this));
        },

        downplayContent: function () {
            var self = this;
            this.flag = false;

            $.each(this.$checkboxes, function(index, value) {
                if (this.checked) {
                    self.flag = true;
                    return;
                }
            });

            if (this.flag) {
                this.$content.collapse('hide');
            }
            else {
                this.$content.collapse('show');
            }
        }

    };
})();

$(function(){
    window.reece.products.init();
});


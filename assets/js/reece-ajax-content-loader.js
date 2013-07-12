(function(){

    window.ajaxContentLoader = {};

    //Load ajax data to be used in a template
    window.ajaxContentLoader = {

        $el: $('[data-load-content]'),
        offset: 8,

        init: function() {
            this.$el.on("click.contentload.data-api", $.proxy(this.requestData, this));
        },

        requestData: function (event) {
            event.preventDefault();
            var instance = this,
                $clickedEl = $(event.currentTarget);
            instance.offset += 4;
            jQuery.ajax({
                type: "POST",
                beforeSend: this.addContentLoader($clickedEl),
                url: "/includes/ajax/ajax.php",
                data: {
                    offset: instance.offset
                },
                dataType: "JSON",
                success: function (data) {
                    instance.removeContentLoader($clickedEl);
                    instance.fetchTemplate(data, $clickedEl);
                }
            });
        },

        addContentLoader: function ($clickedEl) {
            $clickedEl.addClass('ajax-preloader');
        },

        removeContentLoader: function ($clickedEl) {
            console.log('remove');
            $clickedEl.removeClass('ajax-preloader');
        },        

        //Templating function
        fetchTemplate: function (data, $clickedEl) {
            var $templateWrap = $('<div style="display: none;" class="row-fluid"/>'),
                html = "";

            for ( var i = 0; i < data.length; i++ ) {
                html += tmpl("product_block_template", data[i]);
            }

            $templateWrap = $templateWrap.append(html);
            $clickedEl.before($templateWrap);
            $templateWrap.slideDown();
        }
    };
})();

$(function(){
    window.ajaxContentLoader.init();
});
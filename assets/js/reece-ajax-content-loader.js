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
            $clickedEl.removeClass('ajax-preloader');
        },        

        fetchTemplate: function (data, $clickedEl) {
            var increment = 4,
                counter = increment, 
                html = "",
                $templateWrap = $('<div style="display: none;" class="row-fluid"/>'),
                templateMarkup = [];

            //Loop through our returned data and process
            for ( var i = 0; i < data.length; i++ ) {
                //Check if we have reached a row of '4' if we have - append our last iteration, create a new row and reset our variables for the next row
                if (i === counter) {
                    templateMarkup.push($templateWrap.append(html));
                    html = "";
                    html += tmpl("product_block_template", data[i]);
                    $templateWrap = $('<div style="display: none;" class="row-fluid"/>');
                    counter = counter + increment;
                }
                else {
                    html += tmpl("product_block_template", data[i]);
                }
            }

            //Push our final iteration into the array before we append our data
            templateMarkup.push($templateWrap.append(html));
            this.appendTemplate(templateMarkup, $clickedEl);
        },

        appendTemplate: function(templateMarkup, $clickedEl) {

            //Loop through our array of rows and append each to the dom (it would be better to loop through each item and save to a local variables but this is only a sample)
            for ( var i = 0; i < templateMarkup.length; i++ ) {
                $clickedEl.before(templateMarkup[i]);
                templateMarkup[i].slideDown();
            }
        }
    };
})();

$(function(){
    window.ajaxContentLoader.init();
});


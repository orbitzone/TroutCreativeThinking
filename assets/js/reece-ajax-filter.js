(function(){

    window.reece = window.reece || {};

    window.reece.ajaxFilter = {};

    //Load ajax data to be used in a template
    window.reece.ajaxFilter = {

        $el: $('#filter-form'),

        $content: $('#item-list'),

        init: function() {

            this.$el.find('input[type="checkbox"]').on("change.ajax.filter", $.proxy(this.requestData, this));
        },

        requestData: function (event) {
            var instance = this,
                $clicked = $(event.currentTarget);
                category = $clicked.val().trim();

            event.preventDefault();

            jQuery.ajax({
                type: "POST",
                beforeSend: this.addContentLoader(this.$content),
                url: "/includes/ajax/ajax-filter.php",
                data: {
                    category: category
                },
                dataType: "JSON",
                success: function (data) {
                    instance.removeContentLoader(this.$content);
                    instance.fetchTemplate(data, $clicked);
                }
            });
        },

        addContentLoader: function ($content) {

        },

        removeContentLoader: function ($content) {

        },        

        fetchTemplate: function (data, $clicked) {
            var increment = 2,
                counter = increment, 
                html = "",
                $templateWrap = $('<div class="row-fluid"/>'),
                templateMarkup = [];

            //Loop through our returned data and process
            for ( var i = 0; i < data.length; i++ ) {
                //Check if we have reached a row of '4' if we have - append our last iteration, create a new row and reset our variables for the next row
                if (i === counter) {
                    templateMarkup.push($templateWrap.append(html));
                    html = "";
                    html += tmpl("filter_block_template", data[i]);
                    $templateWrap = $('<div class="row-fluid"/>');
                    counter = counter + increment;
                }
                else {
                    html += tmpl("filter_block_template", data[i]);
                }
            }

            //Push our final iteration into the array before we append our data
            templateMarkup.push($templateWrap.append(html));
            this.appendTemplate(templateMarkup);
        },

        appendTemplate: function(templateMarkup) {
            //Empty our container
            this.$content.empty();

            //Loop through our array of rows and append each to the dom (it would be better to loop through each item and save to a local variables but this is only a sample)
            for ( var i = 0; i < templateMarkup.length; i++ ) {
                this.$content.append(templateMarkup[i]);
            }
        }
    };
})();

$(function(){
    window.reece.ajaxFilter.init();
});


$(document).ready(function(){

    var $active;

    $('[data-hitachi-show]').on('click', function(e) {
        e.preventDefault();
        
        var $target = $($(this).data('hitachi-show')),
            $hitachiTab = $('.hitachi-tab');

        //hide active
        if ($active) {
            $active.slideUp('fast');
        }

        //show new active
        $active = $target;
        $target.slideDown('fast');

        //Update tab link
        $hitachiTab.find('.hitachi-tab-link').remove();
        $hitachiTab.prepend('<span class="hitachi-tab-link hitachi-tab-link-'+ $target.data('hitachi-tab-size') +'">' + $target.data('hitachi-tab-text') +'</span>')
    })

});
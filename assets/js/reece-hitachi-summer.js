$(document).ready(function(){

    var $active,
        isFooter = false;

    $('[data-hitachi-show]').on('click', function(e) {
        e.preventDefault();
        
        var $target = $($(this).data('hitachi-show')),
            $hitachiTab = $('.hitachi-tab');

        //hide active
        if ($active) {
            $active.slideUp();
        }

        //show new active
        $active = $target;
        $target.slideDown();

        //Update tab link
        $hitachiTab.find('.hitachi-tab-link').remove();
        $hitachiTab.prepend('<span class="hitachi-tab-link hitachi-tab-link-'+ $target.data('hitachi-tab-size') +'">' + $target.data('hitachi-tab-text') +'</span>');

        if (!isFooter) {
            isFooter = true;
            $('.hitachi-footer').fadeIn();
        }
    });

});
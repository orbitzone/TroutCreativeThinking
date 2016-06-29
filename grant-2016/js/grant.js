var grant = {
	init: function(){
		this.countdown();
    if($('.grid').length > 0){
  		var masonry = new Masonry( '.grid', {
  			itemSelector: '.grid-item'  		
  		});
    }
    if($('#grant').hasClass('news')){
      this.news();
    }
	},
  news: function(){
    $('.slider-thumbs').slick({
      prevArrow: '<button type="button" class="slick-prev"><svg viewBox="0 0 26 46" id="shape-arrow-left"><title>arrow-left</title> <g id="arrow-left-arrow-left"> <path d="M24.4,0.6C24.1,0.2,23.5,0,23,0c-0.5,0-1,0.2-1.4,0.6l-21,21c-0.8,0.8-0.8,2.1,0,2.8l21,21c0.8,0.8,2.1,0.8,2.8,0c0.8-0.8,0.8-2.1,0-2.8L4.9,23L24.4,3.4C25.2,2.6,25.2,1.4,24.4,0.6z"/> </g> </svg></button>',
      nextArrow: '<button type="button" class="slick-next"><svg viewBox="0 0 26 46" id="shape-arrow-right"><title>arrow-right</title> <g id="arrow-right-arrow-right"> <path d="M1.6,45.4C2,45.8,2.5,46,3,46c0.5,0,1-0.2,1.4-0.6l21-21c0.8-0.8,0.8-2.1,0-2.8l-21-21c-0.8-0.8-2.1-0.8-2.8,0c-0.8,0.8-0.8,2.1,0,2.8L21.2,23L1.6,42.6C0.8,43.4,0.8,44.7,1.6,45.4z"/> </g> </svg></button>',
      slidesToScroll:4,
      slidesToShow:4,
      asNavFor: '.slider-main',
      focusOnSelect: true
    });
    $('.slider-main').slick({
      prevArrow: '<button type="button" class="slick-prev"><svg viewBox="0 0 26 46" id="shape-arrow-left"><title>arrow-left</title> <g id="arrow-left-arrow-left"> <path d="M24.4,0.6C24.1,0.2,23.5,0,23,0c-0.5,0-1,0.2-1.4,0.6l-21,21c-0.8,0.8-0.8,2.1,0,2.8l21,21c0.8,0.8,2.1,0.8,2.8,0c0.8-0.8,0.8-2.1,0-2.8L4.9,23L24.4,3.4C25.2,2.6,25.2,1.4,24.4,0.6z"/> </g> </svg></button>',
      nextArrow: '<button type="button" class="slick-next"><svg viewBox="0 0 26 46" id="shape-arrow-right"><title>arrow-right</title> <g id="arrow-right-arrow-right"> <path d="M1.6,45.4C2,45.8,2.5,46,3,46c0.5,0,1-0.2,1.4-0.6l21-21c0.8-0.8,0.8-2.1,0-2.8l-21-21c-0.8-0.8-2.1-0.8-2.8,0c-0.8,0.8-0.8,2.1,0,2.8L21.2,23L1.6,42.6C0.8,43.4,0.8,44.7,1.6,45.4z"/> </g> </svg></button>',
      focusOnSelect: true
    });    
  },
	countdown: function(){
		var labels = ['days', 'hours', 'minutes', 'seconds'],
			date = $('#countdown').data('date'),      
      currDate = '00:00:00:00:00',
      nextDate = '00:00:00:00:00',
      parser = /([0-9]{2})/gi;
      
  	// Parse countdown string to an object
    function strfobj(str) {
      var parsed = str.match(parser),
        obj = {};
      labels.forEach(function(label, i) {
        obj[label] = parsed[i]
      });
      return obj;
    }
    // Return the time components that diffs
    function diff(obj1, obj2) {
      var diff = [];
      labels.forEach(function(key) {
        if (obj1[key] !== obj2[key]) {
          diff.push(key);
        }
      });
      return diff;
    }
		// Build the layout
    var initData = strfobj(currDate);
    labels.forEach(function(label, i) {
    	$('#countdown').find('.'+label+' .curr span').text(initData[label]);
      $('#countdown').find('.'+label+' .next span').text(initData[label]);
      $('#countdown').find('.'+label+' .label span').text(label);
    });
    $('#countdown').css({
    	opacity: 1
    });
    $('#countdown').countdown(date, function(event) {
    	var newDate = event.strftime('%D:%H:%M:%S'),
        data;
      if (newDate !== nextDate) {
        currDate = nextDate;
        nextDate = newDate;
        // Setup the data
        data = {
          'curr': strfobj(currDate),
          'next': strfobj(nextDate)
        };
        // Apply the new values to each node that changed
        diff(data.curr, data.next).forEach(function(label) {
          var selector = '.%s'.replace(/%s/, label),
          $node = $('#countdown').find(selector);
          // Update the node
          $node.removeClass('flip');
          $node.find('.curr span').text(data.curr[label]);
          $node.find('.next span').text(data.next[label]);
          // Wait for a repaint to then flip
          setTimeout(function() {
            $node.addClass('flip');
          }, 50);
        });
      }
		});
	}
};
(function($) {
	$(function(){
		grant.init();
	});
})(jQuery);
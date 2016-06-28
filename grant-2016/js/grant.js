var grant = {
	init: function(){
		this.countdown();
		var masonry = new Masonry( '.grid', {
			itemSelector: '.grid-item'  		
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
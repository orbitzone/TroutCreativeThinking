+function(e){"use strict";e(window).on("load resize",function(){var t=0;e("[data-resize-group]").each(function(){e(this).find('[data-resize="height"]').each(function(){e(this).innerHeight()>t&&(t=e(this).innerHeight())});e(this).find('[data-resize="height"]').css("min-height",t+"px")})})}(window.jQuery);

	//Bootstrap the popover data API. It's opt in by default because due to performance issues but we are not going to be using many.
	$(document).ready(function() {
        $('[data-toggle="popover"]').each(function() {
            $(this).popover();
        });
	});

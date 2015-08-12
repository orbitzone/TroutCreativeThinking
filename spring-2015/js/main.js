jQuery(function($){
	var loveFamily = {
		init: function(){
			$.ajax({
				url:'pages/family/collection-intro.html',
				success: function(data){
					$('#main-content').html(data);
					loveFamily.bathroomsForInspiration();
				}
			});
		},
		bathroomsForInspiration: function(){
			$.ajax({
				url: 'pages/family/bathrooms-for-inspiration.html',
				success: function(data){
					$('#main-content').append(data);
				}
			});
		}
	}
	var homePage = {
		init: function(){
			$.ajax({
				url:'pages/homepage.html',
				success: function(data){
					$('#main-content').html(data);					
				}
			});
		}
	}
	homePage.init();
	$(document).on('click','.load_page',function(){
		var data = { section: $(this).data('section')};
		var url = $(this).attr('href');
		history.pushState(data, null, url);
		requestContent($(this).data('section'));
		return false;
	});
	function requestContent(section) {
		if(section == null){
			homePage.init();
		}
	  if(section == 'love-family'){
	  	loveFamily.init();
	  }
	}
	window.addEventListener('popstate', function(e) {
	  var section = e.state.section;
    requestContent(section);
    document.title = 'Title';
	});
});
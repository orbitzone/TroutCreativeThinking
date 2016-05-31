$(document).ready(function() {
    productChooser.init();
})

if (typeof localStorage.reecePlumberVoted === 'undefined') {
	localStorage.reecePlumberVoted = 0;
}

var productChooser = {

	init: function () {
		this.attachEvent();
	},

	ajaxURL: 'results.php',

	hasUserVoted: parseInt(localStorage.reecePlumberVoted),

	attachEvent: function () {
		if (!productChooser.hasUserVoted) {
			$('#name-chooser .name-card').addClass('clickable-card').click(productChooser.clickHandler);
		}
		else {
			productChooser.displayActive(localStorage.votedID, localStorage.votedName);
		}
	},

	removeEvent: function () {
		$('#name-chooser .name-card').removeClass('clickable-card').unbind();
	},

	clickHandler: function (e) {
		e.preventDefault();
		productChooser.makeActive($(this).data('id'), $(this).data('name'), $(this));
	},

	makeActive: function (id, name) {
		productChooser.displayActive(id, name);
		productChooser.removeEvent();
		localStorage.reecePlumberVoted = 1;
		localStorage.votedID = id;
		localStorage.votedName = name;
	},

	displayActive: function (id, name) {
		var item = $('#plumber-name-'+id);
		item.addClass('active');
		var img = item.find('img');
		img.attr('src', img.data('alt'));
		item.append('<span class="chosen-text"><strong>Nice work!</strong> You\'ve chosen '+ name +'</span>');
		var data = (!productChooser.hasUserVoted)? { 'voteID': id } : {};
		$.getJSON(productChooser.ajaxURL, data, productChooser.handleAjax)
	},

	handleAjax: function (data) {
		$(data.results).each(function (key, option) {
			var currentOption = $('#plumber-name-'+option.id);
			currentOption.addClass('voted').find('.vote-value').html(option.votes);
		});
	}
}
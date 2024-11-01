jQuery(function() {
	jQuery("#wpadminbar").css({'margin-top': '-25px', 'cursor': 'pointer'});
	var timeout = null;

	jQuery("#wpadminbar").hover(function() {
		if (timeout) {
			clearTimeout(timeout);
			timeout = null;
		}

		jQuery(this).stop(true, true).animate({ marginTop: 0 }, 'fast');
	}, function() {
		var menuBar = jQuery(this);
		timeout = setTimeout(function() {
			timeout = null;
			menuBar.stop(true, true).animate({ marginTop: -25 }, 'slow');
		}, 500);
	});
});

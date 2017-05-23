jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function($) {


	// Remove empty P tags created by WP inside of Accordion and Orbit
	$('.accordion p:empty, .orbit p:empty').remove();

	// Makes sure last grid item floats left
	$('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
	$('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
		if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
			jQuery(this).wrap("<div class='widescreen flex-video'/>");
		} else {
			jQuery(this).wrap("<div class='flex-video'/>");
		}
	});





	// Scroll to sections
	$('body.home').on('click', '#top-bar-menu .top-bar-right .menu a', function(e) {
		e.preventDefault();

		// Get permalink from current URL
		var url = $(this).attr('href');
		var bits = url.split('/');
		var link = bits[ bits.length - 1 ] == '' ? bits[ bits.length - 2 ] : bits[ bits.length - 1 ];

		// Set top offset based on link
		switch (link) {
			// case '#welcome':
			// 	var top = $('#stickied').offset().top;
			// 	break;
			// case '#site-navigation':
			// 	var top = $(link).offset().top;
			// 	break;
			default:
				var top = $('#' + link).offset().top - $('#site-navigation').innerHeight() + 1;
				break;
		}

		// Scroll to position
		$('html, body').stop().animate({
			scrollTop: top
		}, 1000);

		// Click menu
		$('#site-navigation h1').trigger('click');
	});

});

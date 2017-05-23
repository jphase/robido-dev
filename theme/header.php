<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="http://robido.laurenbrassaw.com/favicon.ico" rel="shortcut icon">
        <link href="http://robido.laurenbrassaw.com/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<script src='https://api.mapbox.com/mapbox-gl-js/v0.20.1/mapbox-gl.js'></script>
		<link href='https://api.mapbox.com/mapbox-gl-js/v0.20.1/mapbox-gl.css' rel='stylesheet' />
		<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-heat/v0.1.3/leaflet-heat.js'></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
  				// Add smooth scrolling to all links
  				$("a").on('click', function(event) {

					$("a").removeClass('active');
        			$(this).addClass('active');

    			// Make sure this.hash has a value before overriding default behavior
    				if (this.hash !== "") {
      					// Prevent default anchor click behavior
      						event.preventDefault();

      					// Store hash
      					var hash = this.hash;

      					$('html, body').animate({
        					scrollTop: $(hash).offset().top - 130
      					}, 1600, function(){

      					});
    				} // End if
  				});
			});
		</script>

		<?php wp_head(); ?>
		<!-- <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script> -->

	</head>
	<body <?php body_class(); ?>>
			
		<!-- header -->
		<header class="header clear" role="banner">

		<!-- wrapper -->
		<div class="wrapper">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="/wp-content/themes/blank-child/img/logo.svg" alt="" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
			
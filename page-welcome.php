<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

			<main id="main" class="large-12 medium-12" role="main">
				
				<?php
					// Welcome
					get_template_part( 'content', 'welcome' );
					
					// About
					get_template_part( 'content', 'about' );

					// Services
					get_template_part( 'content', 'services' );

					// Our Work
					get_template_part( 'content', 'our-work' );

					// Articles
					get_template_part( 'content', 'articles' );

					// Contact
					get_template_part( 'content', 'contact' );
				?>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
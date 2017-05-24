<?php
	// Articles Page
	$post = get_post(14);
	setup_postdata( $post );
?>

<section id="<?php echo $post->post_name; ?>" class="large-12 medium-12">
	
	<div class="inner-wrapper">

		<h2><?php the_title(); ?></h2>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>
				    
				<?php endwhile; ?>	
						
				<?php endif; ?>
		
	</div>

</section>
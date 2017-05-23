<?php
	// Welcome Page
	$post = get_post(5);
	setup_postdata( $post );
?>

<section id="<?php echo $post->post_name; ?>" class="large-12 medium-12">
	
	<div class="inner-wrapper">

		<?php the_content(); ?>

	</div>

</section>
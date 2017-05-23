<?php
	// Services Page
	$post = get_post(10);
	setup_postdata( $post );
?>

<section id="<?php echo $post->post_name; ?>" class="large-12 medium-12">
	
	<div class="inner-wrapper">

		<h2><?php the_title(); ?></h2>

		<?php the_content(); ?>
		
	</div>

</section>
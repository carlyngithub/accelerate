<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			
			<?php while ( have_posts() ) : the_post();	
				$services = get_field('services');
				$client = get_field('client');
				$link = get_field('site_link');
				$image_1 = get_field('image-1');
				$image_2 = get_field('image-2');
				$image_3 = get_field('image-3');
				$size = "full";	?>

<article class="case-study">
		<aside class="case-study-sidebar">
			<h2><?php the_title(); ?></h2>
			<h4><?php echo $services; ?></h4>
			<h4><?php echo $client; ?></h4>
			<h4><?php echo $link; ?></h4>
			<div class="case-study-images">
				<?php if($image_1) { ?>
					<img src="<?php echo $image_1; ?>" />
					
				<?php if($image_1) {
					echo wp_get_attachment_image( $image_1, $size ); } ?>
				<?php if($image_2) {
					echo wp_get_attachment_image( $image_2, $size ); } ?>
				<?php if($image_3) {
					echo wp_get_attachment_image( $image_3, $size ); } ?>
				<?php } ?>
			</div>

				<?php the_content(); ?>

<p class="read-more-link"><a href="<?php echo $link; ?>">Visit Live Site</a></p>
</aside>
</article>

		<?php endwhile; // end of the loop. ?>	

		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
<?php /* Template Name: Booking Page */ ?>

<?php get_header(); ?>

	<div id="booking-form">
		<div class="container">
			<?php if ( have_posts()) :
		   while ( have_posts()) : the_post(); ?>

		   <h2><?php echo the_title(); ?></h2>

		   	<?php echo the_content(); ?>
			<?php echo types_render_field('service-treatment', ['output' => 'html']); ?>
			<?php endwhile; else: ?>
				<p>No Posts</p>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer() ?>
<?php 
/*
Template Name: Calendar
Template Description: A custom template to make a kickass events calendar page.
*/
?>
<?php get_header(); ?>
<!-- main -->
<div id="main">
	<div class="container">
		<div class="row">
            <section id="content" class="elevencol">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
			</section>
		</div>
	</div>
</div>
<?php get_footer(); ?>

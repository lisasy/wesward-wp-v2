<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Wesward
 * @since Wesward 2.0
 */

get_header(); ?>
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
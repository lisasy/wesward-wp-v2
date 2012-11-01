<?php
/*
Template Name: Resources
*/
?>
<?php get_header();?>
<!-- main -->
<div id="main">
    <div class="container">
        <div class="row">
            <section id="content" class="sixteencol">
            	<article class="information resources">
				    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
				    	<div class="post-header">
					        <h1><?php the_title(); ?></h1>
				    	</div>
				        <div class="post-body">
				            <div class="row">
				                <?php the_content(); ?>
				            </div>
				        </div>
				    <?php endwhile; else: endif; ?>
				</article>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>
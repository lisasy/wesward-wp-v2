<?php
/*
Template Name: Information/Static
*/
?>
<?php get_header();?>
<!-- main -->
<div id="main">
    <div class="container">
        <div class="row">
            <section id="content" class="elevencol">
            	<article class="information sixteencol">
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
            <?php include('sidebar-information.php'); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
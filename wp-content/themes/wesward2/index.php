<?php
/*
Template Name: Voices
*/
?>
<!-- Index Template -->
<?php get_header(); ?>
<!-- main -->
<div id="main">
    <div class="container">
		<div id="content" class="row">
    		<h1 class="sixteencol">Voices</h1>
    	</div>
        <div class="row">
            <section class="elevencol">
				<div id="post-container">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="row">
				        <article class="sixteencol post-body">
				            <aside class="fourcol">
				                <ol>
				                    <li><?php the_time('M. j, Y'); ?> <span class="icon">P</span></li>
				                    <li><?php comments_popup_link( '0 comments', '1 comment', '% comments' ); ?> <span class="icon">:</span></li>
				                    <ul class="tags">
				                        <?php foreach((get_the_category()) as $category) { echo $category->cat_name . '<li>  </li>'; } ?>
				                    </ul>
				                </ol>
				            </aside>
				            <div class="content twelvecol last">
				            	<a href="<?php the_permalink(); ?>" class="row"><h2><?php the_title(); ?></h2></a>
				                <span class="author row">By <?php the_author_posts_link() ?>
				                </span>
								<?php echo get_post_meta($post->ID, 'description', true); ?>
				                <?php the_content(); ?>
				                <a href="<?php the_permalink(); ?>" class="read-more">(...read more)</a>
				            </div>
				        </article>
				    </div>
				    <hr>
				    <?php endwhile; else: endif; ?>
				</div>
                <div class="navigation"><?php posts_nav_link(); ?></div>

            </section>

            <?php include('sidebar-posts.php'); ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>
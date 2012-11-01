<?php get_header(); ?>

<!-- main -->
<div id="main">
    <div class="container">
        <div class="row">
            <section id="content" class="elevencol">
            	<a href="<?php echo get_settings('home'); ?>" class="back row">&#8592; Go Back</a>
            	<article class="single-post sixteencol">
				    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
				    	<div class="post-header" class="row">
					        <h1><?php the_title(); ?></h1>
					        <span class="author">By <?php the_author_posts_link() ?></span>
				    	</div>
				        <div class="post-body">
				            <aside class="row">
				                <ol class="sixteencol">
				                    <li><span class="icon">P</span> <?php the_time('F jS, Y'); ?></li>
				                    <li><span class="icon">:</span> <?php comments_popup_link( '0 comments', '1 comment', '% comments' ); ?></li>
				                    <li class="tags">
				                     Categories: <?php the_category(', ') ?>
				                    </li>
				                </ol>
				            </aside>

				            <!-- content -->
				            <div id="post-content" class="row">
				                <?php the_content(); ?>
				            </div>
				        </div>
				        <?php wp_related_posts()?>
				        <?php disqus_embed('wesward190'); ?>
				    <?php endwhile; else: endif; ?>
				</article>
					
	        </section>
	        <section class="single-sidebar">
            	<?php include('sidebar-posts.php'); ?>
        	</section>

        </div>
    </div>
</div>
<?php get_footer(); ?>
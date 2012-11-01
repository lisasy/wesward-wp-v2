<?php
/*
Template Name: Front Page
*/
?>
<!-- Index Template -->
<?php get_header(); ?>
<!-- main -->
<div id="main">
    <div class="container">
        <div class="row">
            <section id="content" class="elevencol">
    			<!-- Responsive Slider Testing -->
			    <div class="callbacks_container row">
			      <ul class="rslides" id="slider3">
			        <li>
			          <img src="<?php bloginfo('template_directory'); ?>/testimages/1.jpg" alt="" />
			          <p class="caption">The third caption. Here is more text just to see what it looks likes. <small>Here it is in even smaller text.</small></p>
			        </li>
			        <li>
			          <img src="<?php bloginfo('template_directory'); ?>/testimages/2.jpg" alt="" />
			          <p class="caption">This is another caption</p>
			        </li>
			        <li>
			          <img src="<?php bloginfo('template_directory'); ?>/testimages/3.jpg" alt="" />
			          <p class="caption">The third caption. Here is more text just to see what it looks likes. <small>Here it is in even smaller text.</small></p>
			        </li>
			      </ul>
			    </div>
			</section>
			<?php include('sidebar-feature.php'); ?>
		</div>
		<div class="row">
			<section class="ninecol">
			<ul id="post-container">
				<h2 class="title">Recent</h2>
			    <?php 
				// The Query
				$the_query = new WP_Query('posts_per_page=5&orderby=date&order=DESC');

				// The Loop
				while ( $the_query->have_posts() ) : $the_query->the_post();?>
		

					<!-- If Post-Thumbnail Exists -->
					<?php if( has_post_thumbnail() ) { ?>
					<li class="post-excerpt row" onclick="location.href='<?php the_permalink(); ?>'" style="cursor: pointer;">
						<div class="sixteencol">
				            <aside class="fourcol">
				            	<div class="excerpt-image row">
				            		<?php the_post_thumbnail(); ?>
								</div>
				            </aside>
				            <div class="content twelvecol last">
				            	<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
				                <span class="author row">By <?php the_author_posts_link() ?> &#8226;
				                	<?php the_time("M. j, Y"); ?> (<? wp_days_ago(); ?>)
				                </span>
				                <div class="row"><?php the_excerpt(); ?></div>
				            </div>
						</div>
					</li>

					<?php } else { ?>

					<li class="post-excerpt row" onclick="location.href='<?php the_permalink(); ?>'" style="cursor: pointer;">
			            <div class="content">
			            	<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
			                <span class="author row">By <?php the_author_posts_link() ?> &#8226;
			                	<?php the_time("M. j, Y"); ?> (<? wp_days_ago(); ?>)
			                </span>
			                <div class="row"><?php the_excerpt(); ?></div>
			            </div>
			    	</li>
			        <?php }?>
			    <?php endwhile; wp_reset_query(); ?>
			</ul>
			</section>
			<?php include('sidebar-event.php'); ?>
		</div>
            

        </div>
    </div>
<?php get_footer(); ?>
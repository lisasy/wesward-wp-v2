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
			    <div class="callbacks_container row">
			      <ul class="rslides" id="slider3">
					<?php query_posts('posts_per_page=10'); ?>
					<?php while (have_posts()) : the_post(); ?>
					<?php if ( has_post_thumbnail()) { ?>
			        <li>
			          <img src="<?php echo catch_that_image(); ?>">
			          <p class="caption"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> by <?php the_author_posts_link() ?>, <?php the_time("M. j, Y"); ?> : 
			          	<small>	
			          		<?php
							  $myExcerpt = get_the_excerpt();
							  $tags = array("<p>", "</p>");
							  $myExcerpt = str_replace($tags, "", $myExcerpt);
							  echo $myExcerpt;
						  ?>
						</small>
			          </p>
			        </li>
			        <?php	} ?>
					<?php endwhile; ?>
				    <?php rewind_posts(); ?>
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
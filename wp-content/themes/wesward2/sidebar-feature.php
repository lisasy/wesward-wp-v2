<aside class="fivecol last">
	<article>
		<ul class="feature">
			<?php 
        	query_posts( 'category_name=opinion' );
       		 while ( have_posts() ) : the_post(); ?>
			<li>
				<div class="box-link" onclick="location.href='<?php the_permalink(); ?>'" style="cursor: pointer;">
					<h4><?php the_title();?></h4>
					<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link() ?></small>
				</div>
			</li>
			<?php endwhile; ?>
        	<?php wp_reset_query(); ?>
		</ul>
	</article>	
</aside>